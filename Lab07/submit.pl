#!/usr/bin/perl
# Standard header stuff
use strict;
use CGI qw( :standard );
use CGI::Carp qw(warningsToBrowser fatalsToBrowser);
print header(); print start_html("Perl Debug");

# Get inputs
my $name    	= param("name");
my $userName    = param("UserName");
my @checks		= param("interest");
my $checks		= param("interest");
my $numba		= param("phoneNumber");
my $visit 		= param("beenBefore");
my $occupation	= param("occupation");

sub openfile
	{
		open ( MYFILE, ">>LOG.txt" );
		print MYFILE "$name \t $userName \t @checks \t 
				$numba \t $visit \t $occupation \n";
		close ( MYFILE);
	}


# Print welcome message
if ($name eq ""){
	print h1 ("Please enter a name. 
				Hit the back button and try again.");}
elsif ($name eq "Bob") {
  print h1("Bob who??");}
else {
  print h1("Welcome, $name.  Good thing you aren't Bob.");}
  
if(!@checks){
	print h1 ("Please check off your interests. 
				Hit the back button and try again.");}
	
if ($numba =~ / ^ \(\d{3} \) \d{3} \)- \d{4} $ /x) 
	{ h1("Please press back and enter a valid number in the form of (555)555-5555");}
else {
	openfile;
	print h2("We recorded the following information:");
		print ( table (
				Tr( td( "Name:"),
					td( "$name") ),
					
				Tr(	td( "User Name:"),
					td( "$userName") ),
					
				Tr(	td( "Phone:"),
					td( "$numba") ),
					
				Tr(	td( "Visited before:"),
					td( "$visit") ),
				
				Tr(	td( "Occupation:"),
					td( "$occupation") ) ) );}	

# Print farewell stuff


# Print HTML footer
print ( end_html() );





