# Microservices Application

This is a microservices application consisting of two services, "users" and "notifications", that communicate via a message bus.

## Description

The "users" service provides an endpoint `POST /users` to store user data in a database or log file. The request body should include the following fields: `email`, `firstName`, and `lastName`. Upon successful data storage, an event is generated and sent through a message broker to the "notifications" service.

The "notifications" service consumes the event and saves the sent data in a log file.

## Installation

1. https://symfony.com/doc/current/setup.html
2. https://symfony.com/doc/current/setup/docker.html
3. https://www.rabbitmq.com/download.html
4. Clone the repository from GitHub:

   ```bash
   git clone https://github.com/ferdgh/symfony-notifications-microservices.git

## Running

   Open terminal
   ```bash
   cd users
   docker-compose up --build
   symfony server:start
   ```

   Open browser<br>
   http://localhost:8000/users/



