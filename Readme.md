<h1>Project Details</h1>

<h3>Requirements</h3>
<ol>
    <li>wp-cli</li>
    <li>MySQL v8.0.32</li>
</ol>

<h3>Instructions for project setup</h3>
<ol>
    <li>Clone this repo</li>
    <li>Enter the reop and run command : wp core download --skip-content</li>
    <li>Create a virtualhost for your project</li>
    <li>Create a database for your project</li>
    <li>In phpmyadmin run the following command: wp serach-replace "http://bluemaster.test/" "your_virtualhost"</li>
</ol>