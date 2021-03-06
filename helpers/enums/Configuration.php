<?php

namespace abhimanyu\installer\helpers\enums;

class Configuration
{
	// Basic Configs
	const APP_NAME           = 'app.name';
	const APP_TOUR           = 'app.tour';
	const APP_SECRET         = 'app.secret';
	const APP_BACKEND_THEME  = 'app.backend.theme';
	const APP_FRONTEND_THEME = 'app.frontend.theme';
	const APP_INSTALLED      = 'installed';

	// Recaptcha Settings
	const RECAPTCHA_SITE_KEY   = 'recaptcha.site-key';
	const RECAPTCHA_SECRET     = 'recaptcha.secret';
	const RECAPTCHA_DEBUG_MODE = 'recaptcha.debugMode';

	// Cache
	const CACHE_CLASS = 'cache.class';

	// Admin
	const ADMIN_INSTALL_ID = 'admin.installationId';
	const ADMIN_EMAIL      = 'admin.email';

	// Yii2-User
	const USER_REGISTRATION                = 'user.enableRegistration';
	const USER_PASSWORD_RESET_TOKEN_EXPIRE = 'user.passwordResetTokenExpire';
	const USER_FORGOT_PASSWORD             = 'user.enableForgotPassword';
	const REMEMBER_ME_DURATION             = 'user.rememberMeDuration';
	const USER_LOGIN_TYPE                  = 'user.loginType';

	// Config File
	const CONFIG_FILE  = 'dynamicConfigFile';
	const PARAMS_FILE  = 'dynamicParamsFile';
	const MODULES_FILE = 'dynamicModulesFile';

	// Migrations Folder
	const MIGRATE_FOLDER = 'migrateFolder';

	// Mailer
	const MAILER_USE_TRANSPORT = 'mail.useTransport';
	const MAILER_HOST          = 'mail.host';
	const MAILER_USERNAME      = 'mail.username';
	const MAILER_PASSWORD      = 'mail.password';
	const MAILER_PORT          = 'mail.port';
	const MAILER_ENCRYPTION    = 'mail.encryption';

	// Authentication Clients

	// Google
	const GOOGLE_AUTH          = 'authClientCollection.google';
	const GOOGLE_CLIENT_ID     = 'authClientCollection.google.clientId';
	const GOOGLE_CLIENT_SECRET = 'authClientCollection.google.clientSecret';

	// Facebook
	const FACEBOOK_AUTH          = 'authClientCollection.facebook';
	const FACEBOOK_CLIENT_ID     = 'authClientCollection.facebook.clientId';
	const FACEBOOK_CLIENT_SECRET = 'authClientCollection.facebook.clientSecret';

	// Linked In
	const LINKED_IN_AUTH          = 'authClientCollection.linkedIn';
	const LINKED_IN_CLIENT_ID     = 'authClientCollection.linkedIn.clientId';
	const LINKED_IN_CLIENT_SECRET = 'authClientCollection.linkedIn.clientSecret';

	// Github
	const GITHUB_AUTH          = 'authClientCollection.github';
	const GITHUB_CLIENT_ID     = 'authClientCollection.github.clientId';
	const GITHUB_CLIENT_SECRET = 'authClientCollection.github.clientSecret';

	// Live
	const LIVE_AUTH          = 'authClientCollection.live';
	const LIVE_CLIENT_ID     = 'authClientCollection.live.clientId';
	const LIVE_CLIENT_SECRET = 'authClientCollection.live.clientSecret';

	// Twitter
	const TWITTER_AUTH            = 'authClientCollection.twitter';
	const TWITTER_CONSUMER_KEY    = 'authClientCollection.twitter.consumerKey';
	const TWITTER_CONSUMER_SECRET = 'authClientCollection.twitter.consumerSecret';
}