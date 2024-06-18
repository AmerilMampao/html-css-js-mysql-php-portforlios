nasa education section
Table:education
user_education_id: (primary key)
user_quote: (varchar 255)
user_img_school: (varchar 255)
user_course: (varchar 255)
user_schoolname: (varchar 255)
user_yearTo:(year)
user_yearFrom:(year)
user_status:(varchar 255)

-----------------------------------
nasa home section 
Table: Socials
user_social_id (primary key)
user_linkedin (varchar 255)
user_github (varchar 255)
user_facebook (varchar 255)
user_instagram (varchar 255)

-------------------------------------
nasa about me section
Table: AboutMe
user_aboutme (primary key) 
user_profile_img (varchar 255)
user_firstname (varchar 255)
user_lastname (varchar 255)
user_paragraph (varchar 255)
user_age (int)
user_phoneno (bigint)
user_email (varchar 255)
user_place (varchar 255)
-------------------------------------
nasa project section
Table: project
user_project_id (primary key)
user_project_img (varchar 255)
user_project_title (varchar 255)
user_project_description (varchar 255)
user_projectlink (varchar 255)
-------------------------------------
nasa contact section
Table: ContactMe
contact_id (primary key)
name (varchar 255)
email (varchar 255)
phone (varchar 255)
message (varchar 255)