## API documentation for USIMS

The API is available at http://127.0.0.1:8000/api

# Endpoints

Register new student
#### POST /add-student
*** parameters 
- surname
- firstname
- othername
- dob
- email
- mat_no
- phone
- school_id
- course_id
- level_id
- passport

View student info from scan
#### POST /dashboard
*** parameter
- qr_hash

Admin view of student data
#### POST /admin-dashboard
***parameter
- mat_no

Making all payments
#### POST /payment
*** parameter
- teller_id
- mat_no
- desc (Medical/Library)
- sess (session)

Create new session
#### POST /new-session
*** parameter
- session (2019/2020)

List all registered sessions
#### POST /list-session

Enter borrowed books from the library
#### POST /lib-new
*** parameter
- account_no (book id)
- mat_no
- return_date

List all student library details for borowed books
#### POST /lib-hist
*** parameter
- mat_no


