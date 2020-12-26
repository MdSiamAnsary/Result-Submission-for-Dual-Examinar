# Result Submission for Dual Examinar

## ([Demo Video(s) of Implementation](https://drive.google.com/drive/folders/1nuu-F5zAQZ21Y1xnKLuLa0Z_tG6LTZoB?usp=sharing))
- **([Detailed Demo Video] (https://drive.google.com/file/d/1fde4zpaln1nR1SmeHeMpRw3JMbfx14Ww/view?usp=sharing))** 
   In this demo, the implementation is checked with invalid and valid all types of inputs 
- **Short Demo Video** In this demo, the implementation is checked with valid inputs 

# Problem Statement(s)
- Teachers must me registered and logged in the system. 
- Two teachers will submit marks for 5 students and 3 courses
- Teacher will submit Class Test (40) and Final (60) marks
- The result will be generated based on the average of two teachers' marks
- If 20% marks deviation has been found, the result will not generated.

# Implementation description
### Registration and Log in 
To be able to use the system, one has to be a registered user. 

To register, one has to provided four pieces of information on mandatory basis. They are 
- **Full name** The name should be valid. 
- **Username** Username can be of length between 6 and 20
- **Email** Email has to be valid
- **Password** Password can be of length between 6 and 10. (Rather than using plaintext, password is encrypted)

Username, email and password need to be unique.  

To log in, one has to provided a valid registered **Email** and **Password** that are both associated with one account. 

### Being in the system  
**Session** has been used, so that, only logged in users can navigate / use the system. 



### Marks entry
While entering marks, few aspects need to be considered. They are 
- **Student ID** Student ID has to be entered. It can only contain digits. 
- **Course** Students are associated with three course. Teacher should select the right course. 
- **Quiz Marks** It is a mandatory field and the entered value can be between 0 and 40.
- **Final Marks** It is a mandatory field and the entered value can be between 0 and 60.
- **Teacher** Teacher should select if s/he wants to enter information as Teacher 1 or Teacher 2 as each course is taught by two teachers.

### Marks calculation  
Marks calculation is associated with few aspects. They are as below.
- For a student, total marks in a course is calculated as the average from the marks that come from two teachers. So, if both teachers have not entered marks for a student in a particular course, then, for that student, final marks in that course cannot be calculated.
- For a student, if marks in a particular course from two teachers, differ by more than 20 twenty marks,  scripts have to be rechecked and marks have to be entered again for final calculation. 

###  Displaying / Checking Marks

Marks are displayed / can be checked in the system by more than one way. 
- For each course individually, in three webpages,  marks are displayed for all students. 
- Marks in all courses, for all students are displayed in a webpage. 

Marks are always displayed in he order of Student IDs. 

###  Development Environment 

Implementation has been done using **XAMPP** on Windows OS PC. 

MySQL (XAMPP) has been used for database operation. 
A database has been created named `resultsubmissionfordualexaminar` on `phpMyAdmin`.
The database has two tables. They are `teachers_table` and `marks_table`.
From the SQL files in the repository, the structures of the tables can be understood. 

 
# Work Information
<br />
This has been done as an assignment for the Web Technology and Internet Computing course<br/>
of Master in Information Technology 22 Batch of Institute of Information Technology, Dhaka University.<br/>
<br/>
Course : Web Technology and Internet Computing<br/>
Course Teacher : Mr. Saeed Siddik<br/>
<br/>
Student Name : Md Siam Ansary<br/>
Student ID : 201103<br/>
Program : Master in Information Technology<br/>
Batch : Batch 22<br/>


