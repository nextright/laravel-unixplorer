# nextright Homework

This repository contains a basic laravel application to explore universities in Germany. Your task is to implement a few features/views in this application. The tasks are designed for you to present basic Fullstack skills and how you can read up on new conecpts. You should be able to complete the tasks in a few hours. If you need more time, that's not a problem. Please don't hesitate to contact me if you have any questions.

## Setup

Before you can start, you need to setup the project. Laravel requires PHP and composer as a dependency manager. You can install them locally or use a tool like Laravel Sail if you prefer to use Docker. The default database is SQLite, which should be sufficient for this project.

1. Create a new GitHub repository using this repository as a template. You can make your repository private, if you want to. But if you do, please add me as a collaborator. My GitHub username is `IdrisN`.
2. Clone your new repository to your local machine and change into the project directory.
3. Install the dependencies

    ```bash
    composer install && npm install
    ```

4. Copy the `.env.example` file to `.env` and generate a new application key.
5. Create a file called `database.sqlite` in the `database` directory.

    ```bash
    touch database/database.sqlite
    ```

6. Migrate the database and run the database seeder.

    ```bash
    php artisan migrate --seed
    ```

7. Done 🎉 Now you should be ready to go!

## Tasks

The project contains a fresh laravel application created using the laravel installer. Vue.js and Inertia.js was also added. A `University` and a `Course` model already exist. The database was seeded with a few universities and courses.

Implement the tasks below. You are free to use any package you want but i don't think you will need any. You can also change the existing code if you want to. I would recommend to use Tailwind CSS for styling. The tasks are formulated very broadly. You are free to design the views as you want. Please try to stay close to laravel/PHP and Vue.js best practices and conventions in your code style.

Please commit your changes to your repository as you go. I would like to see your progress. You don't have to commit after every change. But please commit at least after every task.

### Task 1: Implement a list of universities

The first task is to show a list of all universities. The list should contain the name of the university, the link to their website and the number of courses. The list should be sorted by the number of courses in descending order. The list should be paginated with 10 items per page.

You are free to design the list as you want. You can use the `university.index` view to display the list.

### Task 2: Search & Fiter

The second task is to design and implement filters and a search for the university list. The search should allow the user to search for a university by name. The user should be able to filter by course. I.e. the list should only contain universities that offer the selected course. The search field and filter can be placed above the list.

### Task 3: Implement a detail view for universities

The third task is to implement a detail view for universities. Clicking on a university in the list should direct the user to a detail view. The view should contain the name of the university, the link to their website and a list of all courses. The list should contain the name of the course and the course category. The list should be sorted by name.

### Task 4: Implement an application form

Now we want to simulate the ability to apply for a university. Add a button and two input fields to the detail view of a university. A user should be able to enter their name and email address and apply for the university. In order to simulate an application, you need to do the following:

- Create an application model with the following attributes: `name`, `email`, `university_id`
- Create a relationship between the application and the university model
- Create a route to store a new application

When a user applies for a university, a new application should be created. Validate the input fields. The name and email address are required. Applying should not be possibel if an application with the given email already exists. If the validation fails, show the user an error message. If the validation succeeds, create a new application and redirect the user back to the detail view of the university.

## Task 5: Handle applications with jobs & queues

Finally, we want to simulate the ability to handle applications. This should be done by dispatching a job when creating new applications. The job is to be dispatched with a delay of 15 seconds and should randomly accept or reject the application by sending an email to the user. Laravel has a very good documentation on how to handle jobs, queues and emails. You can find it here: https://laravel.com/docs/12.x/queues and here: https://laravel.com/docs/12.x/mail. You can use the 'database' queue connection (check the driver prerequisites in the documentation). The handle mails, you can use the `log` mail driver which will simply write the email content to the log file. If you want to inspect the mails more closely, you can use mailpit (https://mailpit.dev/) which is a local SMTP server with a web interface to view the mails. I've added the mail configuration for mailpit to the `.env.example` file. The goal of this task is to see if you can read up on new concepts and implement them correctly. Hence, you are very free to approach this task as you want. The following steps should be done:

- Create a job to handle the application
- Dispatch the job when creating a new application with a delay of 15 seconds
- The job should randomly accept or reject the application
- Send an email to the user with the result of the application
- Model a way to store the result of the application (accepted or rejected)

### Rating Criteria

As mentioned, the tasks are formulated very broadly. You are free to design the views as you want. It is important that the tasks are implemented correctly. But it is also important that the code is clean and adheres to best practices and conventions.
Your design does not have to win a design award. But it should be modern and easy to use. A responsive design is not required, but would be nice.

## Submission

When you are done, please send me a link to your repository. Please make sure, that I have access to your repository. My GitHub username is `IdrisN`.

If you have any questions, feel free to contact me. I'm happy to help you.

Good luck and have fun!
