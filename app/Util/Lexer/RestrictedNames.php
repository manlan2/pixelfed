<?php

namespace App\Util\Lexer;

class RestrictedNames {

  static $restricted = [
     "about",
     "abuse",
     "admin",
     "administrator",
     "app",
     "autoconfig",
     "blog",
     "broadcasthost",
     "community",
     "contact",
     "contact-us",
     "contact_us",
     "copyright",
     "css",
     "d",
     "dashboard",
     "dev",
     "developer",
     "developers",
     "discover",
     "discovers",
     "doc",
     "docs",
     "download",
     "domainadmin",
     "domainadministrator",
     "email",
     "errors",
     "events",
     "example",
     "faq",
     "faqs",
     "features",
     "federation",
     "fediverse",
     "ftp",
     "guest",
     "guests",
     "help",
     "horizon",
     "hostmaster",
     "hostmaster",
     "i",
     "image",
     "images",
     "imap",
     "img",
     "info",
     "info",
     "is",
     "isatap",
     "it",
     "js",
     "liltay",
     "localdomain",
     "localhost",
     "login",
     "logout",
     "mail",
     "mailer-daemon",
     "mailerdaemon",
     "marketing",
     "me",
     "media",
     "mis",
     "mx",
     "new",
     "news",
     "news",
     "no-reply",
     "nobody",
     "noc",
     "noreply",
     "ns0",
     "ns1",
     "ns2",
     "ns3",
     "ns4",
     "ns5",
     "ns6",
     "ns7",
     "ns8",
     "ns9",
     "owner",
     "pixelfed",
     "pixelfed-support",
     "pixelfed_support",
     "pop",
     "pop3",
     "postmaster",
     "pricing",
     "privacy",
     "root",
     "sales",
     "security",
     "signin",
     "signout",
     "smtp",
     "src",
     "ssladmin",
     "ssladministrator",
     "sslwebmaster",
     "status",
     "support",
     "support",
     "sys",
     "sysadmin",
     "system",
     "terms",
     "tutorial",
     "tutorials",
     "usenet",
     "user",
     "users",
     "uucp",
     "webmaster",
     "wpad",
     "www"
   ];

  public static function get()
  {
    return self::$restricted;
  }

}