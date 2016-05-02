#!/usr/bin/perl
use strict;
use CGI qw ( :standard);
use CGI::Carp qw(warningsToBrowser fatalsToBrowser);

my $username=param("username");

print"Set-Cookie: Username=$username; \n";
print header();
print start_html();
print h1("Welcome $username");
print end_html();

GET /~m164488/Lab09/welcome.pl?username=ac HTTP/1.0
GET /~m164488/Lab09/welcome.pl?username=ac HTTP/1.1
Host: zee.cs.usna.edu
Connection: keep-alive
Cache-Control: max-age=0
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36
Accept-Encoding: gzip,deflate,sdch
Accept-Language: en-US,en;q=0.8
Cookie: Username=ac; __utma=8141238.293673942.1377025169.1382635900.1383071217.14; __utmz=8141238.1381928342.11.5.utmcsr=intranet.usna.edu|utmccn=(referral)|utmcmd=referral|utmcct=/

