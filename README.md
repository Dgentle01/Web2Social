# Web2Social
This PHP script gets newly shared post and automatically shares it to various Social Media Platforms (Twitter, Facebook, Telegram)

# Project Name

  ## Table of Contents
- [Web2Social](#Web2Social)
  - [Table of Contents](#table-of-contents)
  - [Introduction](#introduction) <br>
    <br>This Project was created to ease the stress of manually posting blog posts from Website everytime you publish a new post on your website.
    With these script you can easily publish posts on your website and not bother about having to post on your social platforms again, making you focus more on your website while the code do the social media posting for me instantly.
  - [Features](#features)
    This code includes a library called TwitterOAuth that helps us connect and interact with Twitter.
    The script also takes the content of a post and creates a short summary (excerpt) of it. If the content is longer than a specified length, it cuts it off and adds "..." at the end.
    This Script uses the TwitterOAuth library to post an update on Twitter. It combines the post title, a short excerpt, and the post URL into a status message and then sends it to Twitter.
    This Script posts a message to a Facebook Page and Group. It sends the post title, a short excerpt, and the post URL as a message to the Facebook Page using the Facebook Graph API.
    This function posts a message to a Telegram channel. It sends the post title, a short excerpt, and the post URL as a message using the Telegram Bot API.
    This code hooks into the WordPress wp_insert_post action, which is triggered when a new post is published. It defines a function share_new_post that:

  1. Checks if the post is not a revision (an older version of the post).
  2. Gets the post title, URL, and content.
  3. Creates a short excerpt from the content.
  4. Posts the information to Twitter, Facebook Page, Facebook Group, and Telegram using         the functions defined earlier.
This means every time you publish a new post on your WordPress site, it will automatically share the post on your social media platforms.
  - [Installation](#installation)
  Make 
  - [Usage](#usage)
    # Run the project
npm start

  - [Configuration](#configuration)
   
API_KEY=yourapikey

  - [Contributing](#contributing)
  - [License](#license)
  - [Contact](#contact)
  - [Acknowledgements](#acknowledgements)

## Introduction
Provide a brief introduction to your project, including the purpose and main functionalities. Explain why you created this project and what problems it aims to solve.

## Features
List the main features of your project. Highlight the most important and useful aspects that make your project stand out.

- Feature 1
- Feature 2
- Feature 3

## Installation
Provide step-by-step instructions on how to install and set up your project. Include any prerequisites or dependencies that need to be installed.

```sh
# Clone the repository
git clone https://github.com/yourusername/yourproject.git

# Navigate to the project directory
cd yourproject

# Install dependencies
npm install



### Explanation of Each Section:

1. **Introduction**: Gives a brief overview of what the project is about and its purpose.
2. **Features**: Lists the key features and functionalities of the project.
3. **Installation**: Provides step-by-step instructions on how to set up the project locally.
4. **Usage**: Explains how to run and use the project, including any command-line instructions or examples.
5. **Configuration**: Details any configuration settings or environment variables needed for the project.
6. **Contributing**: Outlines how others can contribute to the project, including guidelines for submitting issues and pull requests.
7. **License**: Specifies the license under which the project is distributed.
8. **Contact**: Offers contact information for the project maintainer(s).
9. **Acknowledgements**: Credits any resources, libraries, or individuals that have contributed to the project.

Feel free to customize this template to suit the specific needs of your project. A well-documented `README.md` file helps others understand, use, and contribute to your project effectively.
