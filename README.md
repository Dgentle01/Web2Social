# Web2Social
This PHP script gets newly shared post and automatically shares it to various Social Media Platforms (Twitter, Facebook, Telegram)

# Project Name
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

  ## Table of Contents
[Web2Social](https://github.com/Dgentle01/Web2Social/blob/2f80b825ecd115e6785fd21654b6f1b59638ee1a/Web2Socials.php)
  - [Table of Contents](#table-of-contents)
  - [Introduction](https://github.com/Dgentle01/Web2Social/edit/master/README.md#introduction)
  - [Features](#features)
  - [Installation](#installation)
  - [Usage](#usage)
  - [Configuration](#configuration)
  - [Contributing](#contributing)
  - [License](#license)
  - [Contact](#contact)
  - [Acknowledgements](#acknowledgements)

## Introduction
<br>This Project was created to ease the stress of manually posting blog posts from Website everytime you publish a new post on your website.
    With these script you can easily publish posts on your website and not bother about having to post on your social platforms again, making you focus more on your website while the code do the social media posting for me instantly.

## Features
List the main features of your project. Highlight the most important and useful aspects that make your project stand out.

- This code includes a library called <b>TwitterOAuth</b> that helps us connect and interact with Twitter.
- The script also takes the content of a post and creates a short summary (excerpt) of it. If the content is longer than a specified length, it cuts it off and adds "..." at the end.
- This Script uses the <b>TwitterOAuth</b> library to post an update on Twitter. It combines the post title, a short excerpt, and the post URL into a status message and then sends it to Twitter.
- This Script posts a message to a Facebook Page and Group. It sends the post title, a short excerpt, and the post URL as a message to the Facebook Page using the <b>Facebook Graph API.</b>
- This function posts a message to a Telegram channel. It sends the post title, a short excerpt, and the post URL as a message using the <b>Telegram Bot API.</b>
-  This code hooks into the WordPress wp_insert_post action, which is triggered when a new post is published. It defines a function share_new_post that:

  1. Checks if the post is not a revision (an older version of the post).
  2. Gets the post title, URL, and content.
  3. Creates a short excerpt from the content.
  4. Posts the information to Twitter, Facebook Page, Facebook Group, and Telegram using         the functions defined earlier.
This means every time you publish a new post on your WordPress site, it will automatically share the post on your social media platforms.

## Installation
  1. **Clone the Repository**

```sh
git clone https://github.com/Dgentle01/Web2Social.git
# Navigate to the project directory
cd Web2Social
```
  2. Install dependencies
Make Sure you have [Composer](https://getcomposer.org) installed, then run;

          composer install

  3. Set Up TwitterOAuth Library

Ensure the TwitterOAuth library is correctly installed:

```
composer require abraham/twitteroauth
```
  4. Configure Environment Variables

Rename .env.example to .env and update it with your API keys and tokens.

## Usage
1. Add Code to WordPress

  Copy the PHP code from the src directory to your 
  WordPress theme's functions.php file or use a custom 
  plugin.

2. Set API Keys and IDs

  Replace the placeholder API keys, tokens, and IDs in   
  the PHP code with your actual credentials.

3. Test the Integration

  Create a new post on your WordPress site and check the   connected social media platforms to ensure the content   is posted.

## Configuration
- Twitter API Keys

  Obtain your API keys from the [Twitter Developer Portal](https://developer.twitter.com/en/apps) and set them in the code.

- Facebook Access Tokens

  Follow the [Facebook API documentation](https://developers.facebook.com/docs/facebook-login/access-tokens) to get your Page and Group access tokens.

- Telegram Bot Token

  Create a bot using BotFather and get the bot token.

# Contributing
We welcome contributions!

1. Fork the repository.
2. Create a new branch: git checkout -b feature/your-feature-name.
3. Commit your changes: git commit -m 'Add some feature'.
4. Push to the branch: git push origin feature/your-feature-name.
5. Open a pull request.
   
## License
This project is licensed under the MIT License. See the [LICENSE](https://img.shields.io/badge/license-MIT-blue.svg) file for details.

## Contact
Email: [Email](oluseyisennuga1@gmail.com) <br>
Telegram: [Telegram](t.me/d_gentle1) <br>
X: [X](https://x.com/D_Gentle01) <br>

## Acknowledgements
[TwitterOAuth](https://github.com/abraham/twitteroauth) by [Abraham Williams](https://github.com/abraham)<br>
[Facebook Graph API](https://developers.facebook.com/docs/graph-api) <br> 
Telegram Bot API <br>
Inspired by [Gentletechs](https://gentletechs.com)


Feel free to [open an issue](https://github.com/Dgentle01/Web2Social/issues) if you have any questions or need further assistance.
