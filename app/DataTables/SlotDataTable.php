<?php

namespace App\DataTables;

use App\Models\Slot;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SlotDataTable extends DataTable
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
            ->addColumn('action', 'slots.dtActions')
            ->editColumn('date', function ($slot) {
                return $slot->date->format('D, d M, Y');
            })
            ->editColumn('startTime', function ($slot) {
                return $slot->startTime->format('H:i') . ' - ' . $slot->endTime->format('H:i');
            })
            ->editColumn('emailStatus', function ($slot) {
                return $slot->emailStatus === null ? '' : ($slot->emailStatus ? 'success' : 'failed' );
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Slot $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Slot $model)
    {
        return $model->newQuery()->with(['category']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('slot-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1, 'asc')
                    ->buttons(
                        Button::make('create')->action("window.location = '".route('createSlot')."';"),
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
                  ->width(60)
                  ->addClass('text-center'),
            'date' => ['title' => 'Date', 'data' => 'date', 'name' => 'date'],
            'time' => ['title' => 'Time', 'data' => 'startTime', 'name' => 'startTime', 'orderable' => false, 'searchable' => false],
//            Column::make('startDate'),
//            Column::make('endDate'),
            'name' => [ 'orderable' => false],
            'email' => [ 'orderable' => false],
            'category' => ['title' => 'Category', 'data' => 'category.name', 'name' => 'category.name', 'orderable' => false],
            'remarks' => ['orderable' => false],
            'emailStatus' => ['title' => 'Email status', 'searchable' => true, 'orderable' => true],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Slot_' . date('YmdHis');
    }
}
