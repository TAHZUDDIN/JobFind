I am using Cake php framework. Using XAMPP server


1.First create a database 'jobfinds'. 
2.create table "categories" with two columns id(int)primaykey autoIncrement
    and name(varchar)100.

3. Create table 'types' with three columns  id(int)primaykey autoIncrement,
    name(varchar)100 and color(varchar)100.


4. Create table 'users' with eight columns 
              id(int)primaykey autoIncrement,
              first_name(varchar)100,
	      last_name(varchar)100,
	      email(varchar)100,
              username(varchar)100,
	      password(varchar)100,
              created(DATETIME)null,
              role(varchar)100,	


4. Create table 'jobs' with elevan columns 
              id(int)primaykey autoIncrement,
              category_id(int)11,
	      user_id(int)11,
	      type_id(int)11,
	      company_name(varchar)100,
              title(varchar)100,
	      description(text),
	      city(varchar)100,
              state(varchar)100,
              contact_email(varchar)100,	
              created(DATETIME)null


Now insert some data to database accordingly--------
    INSERT INTO categories (id, name) VALUES 
    (1, 'Accounting & Banking'), 
    (2, 'Construction'),
    (3, 'Fashion & Style'),
    (4, 'Food & Restaurant'),
    (5, 'Healthcare'),
    (6, 'Retail & Sales'),
    (7, 'Technology'); 


    INSERT INTO types(id, name, colour) VALUES 
    (1, 'Full Time', '#81b800'), 
    (2, 'Part Time', '#4c9ef1'),
    (2, 'Freelance', '#f4f4f4');

    
   INSERT INTO users (id, first_name, last_name, email, username, password, role,created)VALUES                          (1,'Bred','Traversy','abc@gmail.com','Bred','great123','Employer','2014-07-16 16:04:23'),
      (2,'Jane','Doe','jane@gmail.com','Jane','great123','Employer','2014-09-26 19:04:23'),
      (3,'John','Doe','john@gmail.com','John','great123','Job Seeker','2014-11-23 20:04:23'),
      (4,'Jennifer','Sheehan','jen@gmail.com','Jennifer','great123','Job Seeker','2014-08-23 21:08:29');


   INSERT INTO jobs(id, category_id, user_id, type_id, company_name, title, description,city, state,contact_email,created)
        VALUES (1,7,1,1,'Tech Guy Computer Service', 'Senior Graphic Designer', 'llll jjjj njbhgvf vgvfcdxsza njdndjjd nj 
        jdjdjdj sdmkdkj skdkskdsd sksdkksdk svsgdf sggggg', 'California','Taxes','abcd@gmail.com','2014-11-23 20:04:23'),  
       (2,7,1,1,'Tech Guy Computer Service', 'UX Designer', 'llll jjjj njbhgvf vgvfcdxsza njdndjjd nj  jdjdjdj sdmkdkj 
        skdkskdsd sksdkksdk svsgdf sggggg', 'California','Taxes','abcd@gmail.com','2014-11-23 20:04:23'), 
      (3,7,1,1,'Harbourside Healthcare', 'Registered Nurse', 'llll jjjj njbhgvf vgvfcdxsza njdndjjd nj  jdjdjdj sdmkdkj 
       skdkskdsd sksdkksdk svsgdf sggggg', 'California','Taxes','abcd@gmail.com','2014-11-23 20:04:23');              
      


   
    

              


 
  
