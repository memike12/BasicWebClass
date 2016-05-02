#!/usr/bin/perl  
use strict;
use CGI qw( :standard );
use CGI::Carp qw(warningsToBrowser fatalsToBrowser);

print header(); print start_html();
my $ship = cookie("ship");
my $file = "fraud-values.txt";
open (FILE, $file) or print ("Could not open file $file for read");
my @badWords = <FILE>;
close (FILE);

my $aLine;
foreach $aLine (@badWords) {
	chomp ($aLine);
	if ($aLine eq $ship){
	print h1("You are trying to hack in. The authorities have been notified.");}
	}
if (!$ship)
	{
		print h1("Where are the cookies at?")
	}
elsif ($ship)
	{
		print h1 ("The value " + $ship + "does not indicate a fraud. Congratulations!");
	}
	
print end_html() ;