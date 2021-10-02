<?php

namespace App\DataTables;

use App\Models\File;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class FileDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'files.dtActions')
            ->editColumn('image', function ($image) {
                return '<a href="'. route("showFile",$image->id) . '" ><img style="max-height:300px;" src="' . asset($image->path) .'" alt="An uploaded image"/></a>';
            })
            ->rawColumns(['image', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\File $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(File $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('file-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1, 'asc')
            ->buttons(
                Button::make('create')->action("window.location = '".route('createFile')."';"),
                Button::make('reset'),
                Button::make('reload'),
                Button::make('excel'),
                Button::make('csv'),
                Button::make('print')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->orderable(false)
                ->searchable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::make('id')
                ->visible(false),
            Column::make('path')
                ->searchable(false)
                ->orderable(false),
            'image' => ['title' => 'Image', 'data' => 'image', 'name' => 'image', 'orderable' => false, 'searchable' => false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'File_' . date('YmdHis');
    }
}
