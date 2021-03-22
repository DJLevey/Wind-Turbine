# Wind-Turbine

## Task

A wind turbine has 100 items on it, each gets inspected. Write an application that outputs numbers from 1 to 100, but for multiples of three print “Coating Damage” instead of the number and for the multiples of five print “Lightning Strike” instead of the number. For numbers which are multiples of both three and five print “Coating Damage and Lightning Strike” instead of the number.
The code to generate the output should be done in PHP and the output should be rendered in HTML with a nice user experience. 

## Notes

Php file to generate sample data. Data stored as an array with structure (("id":1,"status":1),("id":2,"status":2),...) and output with a JSON structure. Stataus will be assigned as either the ID number or the damage type described above.
Html should display data as a simple table with the part number and the inspection status. The table will be populated with data retrieved from the php file using JQuery.
A simple stylesheet will format the table for a more visually appealing user experience.

Files:
  * index.html
  * generate-data.php
  * table.css

Application hosted on AWS Ubuntu platform running Apache: http://ec2-35-178-175-190.eu-west-2.compute.amazonaws.com/

## Future Improvements

### HTML file
If multiple pages are to be added to the application, a template should be created to add common elements and functionality, such as navigation, to each page. If the page is to be integrated into an existing app, then it should use the apps existing template to keep consistency.
Functionality can be added to the table depending on user requirements, e.g.:
  * Refresh table at regular intervals and a visual alert when the status of a part changes.
  * The user ability to add or hide additional columns.
  * Sort and search options.

### PHP file
The php file should be replaced so that instead of generating arbitrary sample data, the file will retrieve the data from a database. If the user can specify the columns they require, the file should only request that information.

### CSS
As with the html file, if more pages are to be added, then the stylesheet should be expanded to keep everything visually consistent. 
