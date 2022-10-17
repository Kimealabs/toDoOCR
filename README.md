<a name="readme-top"></a>

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/131ff1ae4896478f9e01ae84ffc4477c)](https://www.codacy.com/gh/Kimealabs/toDoOCR/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Kimealabs/toDoOCR&amp;utm_campaign=Badge_Grade)
[![Maintainability](https://api.codeclimate.com/v1/badges/f242225de6473dcc77f6/maintainability)](https://codeclimate.com/github/Kimealabs/toDoOCR/maintainability)
<img src="https://img.shields.io/badge/PHP 8.1-black?style=flat-square&logo=Php" />
<img src="https://img.shields.io/badge/LICENCE-MIT-blue" />

<br />
<div align="center">
    <img src="https://user.oc-static.com/upload/2016/11/18/14794830624591_shutterstock_318837722.jpg" alt="Logo" width="250" />

# TODO & CO

  <p align="center">
    An Open Class Rooms Project
    <br />
    <a href="https://github.com/Kimealabs/toDoOCR/"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/Kimealabs/toDoOCR/issues">Report Bug</a>
    ·
    <a href="https://github.com/Kimealabs/toDoOCR/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#my-development-environment">My development environment</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
        <li><a href="#tests">Tests</a></li>
      </ul>
    </li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

Here is the Todo & Co project of my OpenClassRooms (P8) formation "PHP Symfony Dev".

Purpose: Enhance, test and analyse an Application of ToDo & Co company:

This project is a ToDoList application built initialy with Symfony 3.1.
After the improvement, Symfony is on 5.4 (LTS) version and Application can make :


- List done et todo tasks.
- Toggle function to change task status.
- Users can delete owned task and anonymuos task for admin profile.
- Visitor can sign up like user or admin.
- Admin profile can see users list and modify users data.




<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- DEV ENV -->
## My development environment 
### Here the list of frameworks, programs and libraries

<img src="https://img.shields.io/badge/Symfony 5.4-black?style=for-the-badge&logo=Symfony" />  <img src="https://img.shields.io/badge/Symfony CLI 5.4.11-black?style=for-the-badge&logo=Symfony" />

<img src="https://img.shields.io/badge/PHPUnit 9.5-blue?style=for-the-badge" /> <img src="https://img.shields.io/badge/Dama 7.1-grey?style=for-the-badge" />

<img src="https://img.shields.io/badge/Composer 2.3.10-280?style=for-the-badge&logo=Composer" /> <img src="https://img.shields.io/badge/Twig 5.4-green?style=for-the-badge" />

<img src="https://img.shields.io/badge/PHP 8.1-eef?style=for-the-badge&logo=PHP" /> <img src="https://img.shields.io/badge/Apache 2.4.54-fa0303?style=for-the-badge&logo=Apache" /> <img src="https://img.shields.io/badge/PhpMyAdmin 5.2.0-f2cb61?style=for-the-badge&logo=phpMyAdmin" />


<img src="https://img.shields.io/badge/VSCode 1.71.0-0055aa?style=for-the-badge&logo=Visual Studio Code" />

<img src="https://img.shields.io/badge/Docker 4.11.1-eee?style=for-the-badge&logo=Docker" />  <img src="https://img.shields.io/badge/WSL2 with Ubuntu 20.04 LTS-eee?style=for-the-badge&logo=Ubuntu" />

<img src="https://img.shields.io/badge/Boostrap 5.2.0-f1dff1?style=for-the-badge&logo=Bootstrap" /> <img src="https://img.shields.io/badge/JQuery 3.6.1-orange?style=for-the-badge&logo=Jquery" /> <img src="https://img.shields.io/badge/FontAwesome 6.5-blue?style=for-the-badge" />

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

How to install and configure ToDo & Co App

### Prerequisites

- PHP version 8.0.2 or higher
- AMP (MAMP, WAMP, Laragon...) environment if local use (create Database) OR install Docker (docker-compose up with docker-compose.yml) and employ php bin/console serve:start -d
- You can install Symfony CLI to facilitate commands

### Installation

Below is an example of how you can install on local with AMP env. and Symfony CLI.

1. Clone the repo into your directory (git clone https://github.com/Kimealabs/toDoOCR .)
2. Make a composer install
3. Edit .env.local for config your future database with your credentials :

```
# DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
DATABASE_URL="mysql://root:password@127.0.0.1:3306/YOUR DATABASE NAME"
# DATABASE_URL="postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=14&charset=utf8"
###< doctrine/doctrine-bundle ###
```


### If your database don't exist yet :

5. \> `symfony console doctrine:database:create`

6. \> `symfony console doctrine:schema:update -f`


if you want demo data :

7A. \> `symfony console doctrine:fixtures:load --group=demo`


### If your database exist :

**Warning** to your fields structure. Your database Task Table and User table must match with this architecture :

| Field  | Type |
| ------------- | ------------- |
| id  | int  |
| title  | string |
| content  | string |
| created_at  | datetime |
| author  | int |
| is_done  | bool |

| Field  | Type |
| ------------- | ------------- |
| id  | int  |
| username  | string |
| email  | string |
| password | string |




### !!! If you want create an "anonymous" user, which one will recover all tasks with field "author" at *NULL* :

7B. \> `symfony console doctrine:fixtures:load --group=anonymous --append`







### Show the Application

8. \> `symfony server-start -d`

Now you can Open **127.0.0.1:8000**

      
 

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- TESTS -->
## Tests

To test application with PHPunit :

1. `Edit .env.test. for config`

DATABASE_URL=mysql://root:password@127.0.0.1:3306/symfony-test`

2. \> `symfony console doctrine:database:create --env=test`
3. \> `symfony console doctrine:schema:update -f --env=test`
4. \> `symfony console doctrine:fixtures:load --group=test --env=test`

5. You can use PHPUnit now like :

  * \> `vendor/bin/phpunit --coverage-html pubilc/coverage`

    OR

  * \> `vendor/bin/phpunit --filter METHOD_TO_TEST`



<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- ACKNOWLEDGMENTS -->
## Contributing

Click <a href="https://github.com/Kimealabs/toDoOCR/blob/main/CONTRIBUTING.md" >here to contribute</a>.


<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

This is a list of resources you find helpful and i would like to give credit to !

* [Benoit - nouvelle-techno.fr](https://nouvelle-techno.fr/)
* [Img Shields](https://shields.io)
* [UML tools](https://app.diagrams.net/)


<p align="right">(<a href="#readme-top">back to top</a>)</p>
