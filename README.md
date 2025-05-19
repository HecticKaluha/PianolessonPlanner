# PianolessonPlanner
Website built in Laravel. This website allows people to plan a piano lesson with a pianist according to their planning.

## Features
- The pianist can fill a calendar with available slots
- People can book slots within the calendar in which they want to get a pianolesson
- Mailupdates whenever a lesson is planned
- Verification for a booked slot
- Mailupdates whenever there are changes in bookings
- WYSIWYG editor for a blog that can be used to post newsupdates
- Jobs and Workerqueue's for async mailing
- Custom images and videos on the page through the admin dashboard
- Contact with the pianist before booking a lesson slot


## Installation
1. Clone the repo
2. Go into the folder
3. composer update & install
4. npm update & install
5. php artisan key:generate
7. Setup the ADMIN_EMAIL and ADMIN_PASSWORD in the .env (this allows access to the admin page (route = /dashboard)
8. Setup rest of .env file (database etc.)
9. php migrate:fresh --seed
10. npm run watch
8. php artisan serve
9. visit localhost:8000

## Notes
1. some functionality requires correct mail credentials to be set up
2. Some functionality requires jobs and workersqueues
3. To have FontAwesome icons you need a valid route to your FontAwesome kit
4. To have TinyMCE work you need a valid  TinyMCE API token

