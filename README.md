<!-- PROJECT LOGO -->
<br/><br/>
<div align="center">
  <img src="images/UON_logo.png" alt="Logo" width="80" height="80">

  <h3 align="center">Techcode</h3>
  <p align="center">
    Our main goal is to create a user-friendly website for UON freshmen, offering a comprehensive understanding of the school and its services as an alternative to the official site, addressing user feedback.
  </p>
</div>


<!-- TABLE OF CONTENTS -->
<details open>
  <summary><strong>Table of Contents</strong></summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#main-purpose">Main Purpose</a></li>
        <li><a href="#functionality-overview">Functionality Overview</a></li>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <ul>
          <details>
            <summary><a href="#xampp-installation-guide">XAMPP Installation Guide</a></summary>
              <ul>
                <li><a href="#download-xampp">Download XAMPP</a></li>
                <li><a href="#choose-your-operating-system">Choose Your Operating System</a></li>
                <li><a href="#download-xampp-installer">Download XAMPP Installer</a></li>
                <li><a href="#run-the-xampp-installer">Run the XAMPP Installer</a></li>
                <li><a href="#start-xampp">Start XAMPP</a></li>
                <li><a href="#test-xampp-installation">Test XAMPP Installation</a></li>
              </ul>
          </details>
        </ul>
        <li><a href="#installation">Installation</a></li>
          <ul>
            <details>
              <summary><a href="#setting-up-the-database">Setting Up The Database</a></summary>
                <ul>
                  <li><a href="#access-phpmyadmin">Access phpMyAdmin</a></li>
                  <li><a href="#create-a-database">Create a Database</a></li>
                  <li><a href="#import-.sql-file">Import .sql File</a></li>
                  <li><a href="#confirmation">Confirmation</a></li>
                </ul>
            </details>
          </ul>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <ul>
      <details>
        <summary><a href="#to-use-the-dashboard-for-managing-posts-follow-these-steps">To use the dashboard for managing posts</a></summary>
        <ul>
          <li><a href="#access-the-dashboard">Access the Dashboard</a></li>
          <li><a href="#manage-posts">Manage Posts</a></li>
          <li><a href="#add-new-post">Add New Post</a></li>
          <li><a href="#edit-post">Edit Post</a></li>
          <li><a href="#delete-post">Delete Post</a></li>
          <li><a href="#logout">Logout</a></li>
        </ul>
      </details>
      <details>
        <summary><a href="#to-view-the-posts-on-the-website-follow-these-steps">To view the posts on the website</a></summary>
        <ul>
          <li><a href="#navigate">Navigate to the <strong>"posts/"</strong> directory</a></li>
          <li><a href="#preview-posts">Preview Posts</a></li>
          <ul>
            <li><a href="#example">Example</a></li>
          </ul>
        </ul>
      </details>
    </ul>
  </ol>
</details>


## About The Project
![Dashboard Posts Screenshot](images/markdown/screenshot.png)

Our project centers on the development of an intuitive website that caters specifically to incoming UON freshmen. We understand the importance of facilitating a seamless and informative onboarding experience for new students. To achieve this, we have meticulously curated comprehensive information about the university, its facilities, academic programs, and extracurricular activities.

### Main Purpose:

The main purpose of our project is to bridge the gap between UON freshmen and vital information about the university. By offering an easily navigable and engaging platform, we aspire to enhance the overall experience for new students as they embark on their academic journey. Our website serves as a valuable resource, ensuring that newcomers feel welcomed and informed right from the beginning.

### Functionality Overview:

- **User-Friendly Interface:** Our website boasts an intuitive interface, making it effortless for UON freshmen to access the information they need without any confusion.

- **Comprehensive Information:** We have meticulously curated a wide range of content, including details about academic departments, campus facilities, student services, and much more.

- **Interactive Engagement:** In contrast to the official UON website, our platform focuses on fostering engagement by providing interactive features and visually appealing elements.

- **Smooth Onboarding Experience:** Through our project, we aim to streamline the onboarding process for new students, allowing them to quickly adapt to university life with ease.


### Built With
* ![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?logo=XAMPP&style=for-the-badge&logoColor=%23FFFFFF)
* ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
* ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
* ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
* ![JAVASCRIPT](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)


<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

Before you proceed with the installation of XAMPP, make sure you have the following prerequisites:

1. A compatible operating system (Windows, macOS, or Linux).
2. Administrative privileges on your computer.


### XAMPP Installation Guide

Follow the steps below to install XAMPP on your computer:

1. **Download XAMPP:** <a id="download-xampp"></a>
   - Go to the official XAMPP website: [https://www.apachefriends.org](https://www.apachefriends.org).
   - Click on the "Download" button to access the download page.

2. **Choose Your Operating System:** <a id="choose-your-operating-system"></a>
   - On the download page, you will see different versions of XAMPP for various operating systems (Windows, macOS, Linux). Choose the appropriate version for your operating system.

3. **Download XAMPP Installer:** <a id="download-xampp-installer"></a>
   - Click on the link to download the XAMPP installer for your operating system.
   - Save the installer to your computer.

4. **Run the XAMPP Installer:** <a id="run-the-xampp-installer"></a>
   - Locate the downloaded installer on your computer and double-click it to run the installation.
   - Follow the on-screen instructions to install XAMPP.
   - Choose the components you want to install. Typically, Apache, MySQL, PHP, and phpMyAdmin are essential components for web development.

5. **Start XAMPP:** <a id="start-xampp"></a>
   - Once the installation is complete, launch XAMPP.
   - Start the Apache and MySQL services by clicking the "Start" button next to each of them. This will activate the local web server and the MySQL database server.

6. **Test XAMPP Installation:** <a id="test-xampp-installation"></a>
   - Open your web browser and enter `http://localhost` in the address bar.
   - If XAMPP is installed correctly, you should see the XAMPP dashboard, which displays the status of the services and provides links to various tools.


## Installation

### Setting Up The Database:
1. **Access phpMyAdmin:** <a id="access-phpmyadmin"></a>
   - Open your web browser and go to `http://localhost/phpmyadmin`.

2. **Create a Database:** <a id="create-a-database"></a>
   - In the phpMyAdmin dashboard, click on "New" in the left sidebar to create a new database.
   - Enter the name **"techcode"** for your database and click "Create."
    
    
    ![Installation:Create Database Screenshot](images/markdown/installation/create_database.png)

3. **Import .sql File:** <a id="import-.sql-file"></a>
   - Click on the newly created database in the left sidebar to select it.
   - Click on the **"Import"** tab in the top navigation menu.
   - Click on **"Choose File"** and select the .sql file in **"[database/techcode.sql](database/techcode.sql)"**.
   - Click **"Import"** to start the import process.
    
    
    ![Installation:Import SQL Screenshot](images/markdown/installation/import_sql.png)

4. **Confirmation:** <a id="confirmation"></a>
   - Once the import is complete, you should see a confirmation message.
    
    
    ![Installation:Import SQL Screenshot](images/markdown/installation/confirmation.png)


<!-- USAGE EXAMPLES -->
## Usage

### To use the dashboard for managing posts, follow these steps:

1. **Access the Dashboard:** <a id="access-the-dashboard"></a>
   - Open your web browser and navigate to the URL **"[admin_login.html](admin_login.html)"** file (Example: `https://localhost/techocde/admin_login.html`).
   - You will be redirected to the login page. Use the username and password (admin/adminpass123) to log in to the dashboard.
    
    
    ![Usage:Access the Dashboard Screenshot](images/markdown/usage/access_dashboard.png)

2. **Manage Posts:** <a id="manage-posts"></a>
   - Once you're logged in, navigate to the left side menu, hover over **"Manage Posts"**, and select **"View Posts"**. This will take you to the dashboard, where you can see a list of existing posts (if any).
   - To create a new post, simply click on the **"Add Post"** button.
   - To edit or delete an existing post, click on the corresponding **"Edit"** or **"Delete"** button next to the post in the list.


    ![Usage:Manage Posts Screenshot](images/markdown/usage/manage_posts.png)

3. **Add New Post:** <a id="add-new-post"></a>
   - Click on the **"Add Post"** button in the dashboard to create a new post.
   - Fill in the title and content of the post in the provided fields.
   - Click on the **"Add Post"** button to add the new post. The post will be displayed in the list of posts on the dashboard.


    ![Usage:Add New Post Screenshot](images/markdown/usage/add_new_post.png)

4. **Edit Post:** <a id="edit-post"></a>
   - To edit an existing post, click on the **"Edit"** button next to the post in the list.
   - Update the title or content of the post in the provided fields.
   - Click on the **"Update Post"** button to save the changes.


    ![Usage:Edit Post Screenshot](images/markdown/usage/edit_post.png)

5. **Delete Post:** <a id="delete-post"></a>
   - To delete an existing post, click on the **"Delete"** button next to the post in the list.
   - Confirm the deletion when prompted. The post will be removed from the list and the database.


    ![Usage:Delete Post Screenshot](images/markdown/usage/delete_post.png)

6. **Logout:** <a id="logout"></a>
   - To log out from the dashboard, click on the **"Log out"** button at the bottom-left corner of the dashboard.


    ![Usage:Logout Screenshot](images/markdown/usage/logout.png)


### To view the posts on the website, follow these steps:
1. Navigate to the **"posts/"** directory. <a id="navigate"></a>

2. **Preview Posts** <a id="preview-posts"></a>
   - Navigate to the **"posts/"** directory.
   - Choose a PHP file representing the post.
   - Open the PHP file in a web browser to preview the post's content.

### Example

Let's say you want to view the post titled **"Homepage"**. Here's how you can do it:

1. Find the corresponding PHP file for the post **"Homepage"**. In this case, it would be [posts/Homepage.php](posts/Homepage.php).
2. Open the [Homepage.php](posts/Homepage.php) file in a web browser.

Now, you should be able to see the content of the **"Homepage"** post.
