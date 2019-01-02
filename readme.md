
![enter image description here](https://s3-ap-northeast-1.amazonaws.com/webill-s3-bucket/schema.png)

<p  align="center"><a  href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg"  alt="Build Status"></a>
<a  href="https://packagist.org/packages/laravel/framework"><img  src="https://poser.pugx.org/laravel/framework/d/total.svg"  alt="Total Downloads"></a><a  href="https://packagist.org/packages/laravel/framework"><img  src="https://poser.pugx.org/laravel/framework/v/stable.svg"  alt="Latest Stable Version"></a><a  href="https://packagist.org/packages/laravel/framework"><img  src="https://poser.pugx.org/laravel/framework/license.svg"  alt="License"></a>
</p>

  

## About the project

  
Many people struggle to configure a CI/CD environment for their developer team on AWS. The huge amount of available solution makes many people confuse. This project showed how to configure a Continuous Development and Integration with Github, Core pipeline, CodeBuild, and ElasticBeanstalk. You can find the final deployment on this link [bankinfos.net](http://bankinfos.net/).
The application is a small blog application made with Laravel. Laravel is a strong PHP framework.
I apply the concept of blue/green deployment.
![enter image description here](https://s3-ap-northeast-1.amazonaws.com/webill-s3-bucket/route.png)

## Important files

The elasticbeanstalk environment's variables are very important. There is two way to importe variable on the elasticbeanstalk configuration.

-  *All files in .ebextensions are very important. We can configure all the elasticBeanstalk variable there. Also the command lines like php artisan migrate*
- The file buildspec.yml file is important. Without this file codebuild can not work

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)  and  [AWS WEB SERVICES](http://aws.amazon.com) .
