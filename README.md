[![Latest Stable Version](http://poser.pugx.org/nguyenanhung/codeigniter3-vercel-skeleton/v)](https://packagist.org/packages/nguyenanhung/codeigniter3-vercel-skeleton) [![Total Downloads](http://poser.pugx.org/nguyenanhung/codeigniter3-vercel-skeleton/downloads)](https://packagist.org/packages/nguyenanhung/codeigniter3-vercel-skeleton) [![Latest Unstable Version](http://poser.pugx.org/nguyenanhung/codeigniter3-vercel-skeleton/v/unstable)](https://packagist.org/packages/nguyenanhung/codeigniter3-vercel-skeleton) [![License](http://poser.pugx.org/nguyenanhung/codeigniter3-vercel-skeleton/license)](https://packagist.org/packages/nguyenanhung/codeigniter3-vercel-skeleton) [![PHP Version Require](http://poser.pugx.org/nguyenanhung/codeigniter3-vercel-skeleton/require/php)](https://packagist.org/packages/nguyenanhung/codeigniter3-vercel-skeleton)

# CodeIgniter v3 Framework - Skeleton Vercel Application

This is the package `nguyenanhung/codeigniter3-skeleton`, customized, packaged, and configured to be suitable for
deployment on the Serverless Vercel application.

In this package, the main modifications are related to configuration to make it suitable for deployment. There isn't
much difference compared to the `codeigniter3-skeleton` package.

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

## Start Application on Local

Quickly deploy the application with a pre-built Docker container:

1. Build the Docker container:

```shell
docker-compose build
```

2. Start the application:

```shell
docker-compose up -d
```

3. Add url to hosts file

```shell
sudo vi /etc/hosts
```

Add the following line:

```shell
127.0.0.1 app.codeigniter3.io
```

4. Open Service in URL

```shell
http://app.codeigniter3.io/
```

5. Screenshot Page

![https://i.imgur.com/eMddCEJ.jpg](https://i.imgur.com/eMddCEJ.jpg)

## Terms & Disclaimer

This skeleton is publicly available as open source, and anyone can use it for their own purposes under
the `GNU GENERAL PUBLIC LICENSE v3 or later`.

I am not responsible for any specific use of this source code.

## Contact

If you have any questions related to the use of this source code, please contact me through the following information:

| Name        | Email                | GitHub        | Facebook      |
|-------------|----------------------|---------------|---------------|
| Hung Nguyen | dev@nguyenanhung.com | @nguyenanhung | @nguyenanhung |
