# Snow.ly

Snowly is a simple CMS built using Laravel & Vue.js.

Snowly was (at first) created for my friends who needed a quick website that would allow them to post their thoughts, write articles, tell a little bit about themselves, get in contact with potential employer or show-off projects - this is why Snowly supplies you with a blog, articles, projects (fetched from github), about and contact page right out of the box - all of which (except Contact) can be entirely hidden.

While the whole system isn't very robust, it was more of a learning experience for me, but since my friends really enjoyed the outcome and use it on a daily basis - I've decided to release it to the public.

## Table of Contents

-   [General Features](#general-features)
-   [Setup](#setup)
-   [Preview](#preview)

## General Features

-   A decent admin panel created using Bootstrap (it's not pretty, but it works!).
-   Premade pages, out of which all but 'contact page' can be hidden entirely.
-   Responsive design that'll work on all (99%) devices.
-   Modern design, highly intuitional and effective.
-   Premade elements like: codeblock that allows you to display code with proper syntax highlighting

## Setup

-   Clone the repository locally  
    `git clone https://github.com/jonekcode/Snow.ly`

-   Install required dependencies via composer  
    `composer install`

-   Generate a Laravel encryption key and your own `.env` file
    `cp .env.example .env`  
    `php artisan key:generate`  

-   Create your own database via mysql and configure the connection in the `.env` file

-   (Optional) Change Snow.ly specific `.env` parameters

    -   If the application will run as localhost, change **SNOWLY_ADMIN_DOMAIN** to **admin.localhost**

-   Start the server and login as admin/admin by default  
    `php artisan serve`

## Preview

I haven't setup a proper environment for the preview, but here's a pack of screenshots:

## ![](https://i.imgur.com/1ACLfJz.jpg)

## ![](https://i.imgur.com/f2KvpNw.jpg)

## ![](https://i.imgur.com/MZIzZvA.jpg)

## ![](https://i.imgur.com/lBrjkgA.jpg)

## ![](https://i.imgur.com/CeBPmET.jpg)

## ![](https://i.imgur.com/Pr9YKTP.jpg)

## ![](https://i.imgur.com/CuGpUz9.jpg)

## ![](https://i.imgur.com/TeV2ZHX.jpg)

## ![](https://i.imgur.com/Y200TWx.jpg)

## ![](https://i.imgur.com/tIb1oyJ.jpg)
