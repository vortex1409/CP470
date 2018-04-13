#!/usr/bin/perl -w
# Program Name: process.pl
# Author: Michael Dorfman
# This program uses the data passed by the form

# Variables
print "Content-type: text/html\n\n";
$date = "02/27/2018";

# Form Data Parsing
read(STDIN, $temp, $ENV{'CONTENT_LENGTH'});
@pairs = split(/&/, $temp);
foreach $item (@pairs){
   ($key, $content) = split(/=/, $item, 3);
   $fields{$key} = $content;
}

# StartPage Function
sub StartPage {
    # Function Parms to Sub Variable
    my($date) = @_;
    #Start of Page 
    print "<!DOCTYPE html>";
    print "<html>";
    print "<head>";
    print "<title>CP470 - $fields{'name'} - $date</title>";
    print "</head>";
    print "<body>";
    print "$fields{'name'} likes to play $fields{'char'} as $fields{'race'}.<br />";
    # RegEx For Elf and Orc
    if($fields{'race'} =~ /[elf]/)
    {
        print "$fields{'name'} has some fancy heritage.<br />";
    }
    elsif($fields{'race'} =~ /[orc]/)
    {
        print "I wonder at the intelligence of $fields{'name'}.<br />";
    }
    else
    {
        print "$fields{'name'} is neither fancy or less intelligent.<br /> ";
    }
    print "</body>";
    print "</html>";
}

# Call StartPage and Pass the Date
StartPage($date), "\n";