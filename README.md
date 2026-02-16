# Technical Challenge – Setup & Run Guide

This project is a PHP web application built with CodeIgniter 4.
Follow the steps below to install dependencies and run it locally.

## Prerequisites

- PHP `8.2` or higher
- [Composer](https://getcomposer.org/) installed and available on your `PATH`

## 1. Install dependencies

From the project root (this folder), run:

```bash
composer install
```

## 2. Environment configuration

1. Copy the example environment file:

	```bash
	cp env .env
	```

2. Open `.env` and update at least:
	- `app.baseURL` – usually `http://localhost:8080/`

## 3. Run the development server

Use CodeIgniter’s CLI (Spark) from the project root:

```bash
php spark serve
```

By default the app will be available at:

- `http://localhost:8080`

Leave this command running while you test the application.