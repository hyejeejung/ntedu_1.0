# ntedu_1.0
A WordPress page template for a NTX Workshops landing page [(see project doc for details)](https://docs.google.com/document/d/1xuYRT1NUKBAUzYL6bV4KBijaY75pU7ohEnvpawFqXwU/edit#)

### Project Scope

A landing page with:
  - the event details of a workshop happening in September (*DONE* as shown [here](http://74.220.219.113/~neurote8/ntedu/workshops/))
  - a graphic or banner to tell people of the future workshops

### To Deliver

We convert the design to an HTML/CSS file with the placeholder text provided [here](https://docs.google.com/document/d/1jKFloPRfeSLcaQIdRHRGjuC2kmci1EhozmBoanRrjp0/edit).

### Once the HTML file is done

1. The PHP code `<?php the_field('[field name]')?>` will replace the corresponding placeholder sections.
2. Once uploaded as `page-workshop.php` which is a WordPress page template file, WordPress will use the template to generate a web page by populating it with the values fetched from the database.

We currently have the following field names.

Field Name | Values
--- | ---
workshop_image | URL to the hero image
workshop_date_start | Date
workshop_time_start | Text
workshop_date_end | Date
workshop_time_end | Text
workshop_entry | Selected value from the list (Free OR Payment required)
workshop_cost | Number
workshop_level | Selected value from the list (Beginner, Expert, etc.)
workshop_location | Returns coordinate as latitude and longitude (e.g. 37.7629651, -122.45744869999999 for UCSF)
workshop_contact | Email address
workshop_requirements | Paragrah
workshop_program | Paragrah
workshop_instructor | Paragrah
workshop_instructor_photo | URL to the instructor's photo
workshop_introduction | Paragraph
workshop_sponsors | Text
