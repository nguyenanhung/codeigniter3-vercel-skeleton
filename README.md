[![Latest Stable Version](http://poser.pugx.org/nguyenanhung/codeigniter3-vercel-skeleton/v)](https://packagist.org/packages/nguyenanhung/codeigniter3-vercel-skeleton) [![Total Downloads](http://poser.pugx.org/nguyenanhung/codeigniter3-vercel-skeleton/downloads)](https://packagist.org/packages/nguyenanhung/codeigniter3-vercel-skeleton) [![Latest Unstable Version](http://poser.pugx.org/nguyenanhung/codeigniter3-vercel-skeleton/v/unstable)](https://packagist.org/packages/nguyenanhung/codeigniter3-vercel-skeleton) [![License](http://poser.pugx.org/nguyenanhung/codeigniter3-vercel-skeleton/license)](https://packagist.org/packages/nguyenanhung/codeigniter3-vercel-skeleton) [![PHP Version Require](http://poser.pugx.org/nguyenanhung/codeigniter3-vercel-skeleton/require/php)](https://packagist.org/packages/nguyenanhung/codeigniter3-vercel-skeleton)

# CodeIgniter v3 Framework - Skeleton Vercel Application

This is the package `nguyenanhung/codeigniter3-skeleton`, customized, packaged, and configured to be suitable for
deployment on the Serverless Vercel application.

In this package, the main modifications are related to configuration to make it suitable for deployment. There isn't
much difference compared to the `codeigniter3-skeleton` package.

## Vercel Configure

```json
{
    "version": 2,
    "framework": null,
    "functions": {
        "api/**/*.php": {
            "runtime": "vercel-php@0.6.1"
        }
    },
    "outputDirectory": "public",
    "routes": [
        {
            "src": "/(.*)",
            "dest": "/api/index.php"
        }
    ]
}
```

## 💯 Vercel PHP Runtime Versions

- `vercel-php@0.6.1` - Node 18.x / PHP 8.2.x (https://example-php-8-2.vercel.app)
- `vercel-php@0.5.4` - Node 18.x / PHP 8.1.x (https://example-php-8-1.vercel.app)
- `vercel-php@0.4.3` - Node 18.x / PHP 8.0.x (https://example-php-8-0.vercel.app)
- `vercel-php@0.3.5` - Node 18.x / PHP 7.4.x (https://example-php-7-4.vercel.app)

## Install

Run the following command to install the `nguyenanhung/codeigniter3-vercel-skeleton` application and deploy a new
project:

```shell
composer create-project nguyenanhung/codeigniter3-vercel-skeleton [my-app-name]
```

Replace `[my-app-name]` with the name of your new project directory, for example, `my-website`:

```shell
composer create-project nguyenanhung/codeigniter3-vercel-skeleton my-website
```

## Start Application with Native PHP

Start PHP Server:

```shell
composer start
```

Open Service in URL

```shell
http://localhost:8080/
```

## Start Application on Docker

Quickly deploy the application with a pre-built Docker container:

Build the Docker container:

```shell
docker-compose build
```

Start the application on Docker:

```shell
docker-compose up -d
```

Add url to hosts file

```shell
sudo vi /etc/hosts
```

Add the following line:

```shell
127.0.0.1 app.codeigniter3.io
```

Open Service in URL

```shell
http://app.codeigniter3.io/
```

## Deploying this package on Vercel with full compatibility

First, make sure you have the Vercel CLI installed. If you haven't already, you can install it using npm (Node.js
package manager):

```shell
npm install -g vercel
```

1. Navigate to your project directory containing the `nguyenanhung/codeigniter3-vercel-skeleton` application.
2. Now, you need to log in to your Vercel account if you haven't already. Run the following command and follow the
   prompts:

```shell
vercel login
```

Once logged in, you can deploy your project using the Vercel CLI. Run the following command:

```shell
vercel --prod
```

This command will deploy your project to Vercel with production settings. Vercel will provide you with a unique URL for
your deployed application.

Visit the provided URL in your web browser to access your deployed CodeIgniter v3 application on Vercel.

That's it! Your application should now be deployed on Vercel with full compatibility. If you encounter any issues or
need further assistance, feel free to ask.

## Screenshot Page

![https://i.imgur.com/As96dK1.png](https://i.imgur.com/As96dK1.png)

## Original Standard Version

I have released a packaged distribution ready for deployment on On-Premise Servers or Cloud servers like AWS, GCP
here: https://github.com/nguyenanhung/codeigniter3-skeleton

## Terms & Disclaimer

This skeleton is publicly available as open source, and anyone can use it for their own purposes under
the `GNU GENERAL PUBLIC LICENSE v3 or later`.

I am not responsible for any specific use of this source code.

## Contact

If you have any questions related to the use of this source code, please contact me through the following information:

| Name        | Email                | GitHub        | Facebook      |
|-------------|----------------------|---------------|---------------|
| Hung Nguyen | dev@nguyenanhung.com | @nguyenanhung | @nguyenanhung |

