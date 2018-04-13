=begin 
    Joseph Roy
    CP 470 Perl
    Lab Week 5
=cut


#make variables that will hold my name and stuff
$firstName = "Joseph Roy";
$major="Computer Programming";
$favAnimal="Birbs";
$repeatCount=4;
$whileCount=0;
$forCount=12;

#Arrays and Hashes
@arrayOfFavStuff= ("Sly Cooper and the Thevius Raccoonus","Sly 2: Band of Thieves","Sly 3: Honor Amoung Thieves","Sly Cooper: Thieves in Time");
%daysInAMonth=('January',31,'February',"28/29",'March',31,'April',30,'May',31,'June',30,'July',31,'August',31,'September',30,'October',31,'November',30,'December',31);

print("Printing Using For Loop\n");
for($count=0; $count<=$repeatCount; $count++){
    print "$firstName\n";
}
print("\n");

print("Printing with While Loop\n");
while($whileCount <= $repeatCount){
        print "$firstName\n";
        $whileCount++;
}
print("\n");

#writing data from hash to file
open (WRITING, ">months.txt");
while(my($k, $v) = each %daysInAMonth){
    print WRITING "$k has $v days \n";
 }
close(WRITING);

#loading from file and printing line by line
$fileName = "months.txt";
open(README,'<',$fileName)
    or die "File Not Found!";

while(my $line = <README>){
    chomp $line;
    print"$line\n";
}
close(README);

#Cry when opening a file that doesnt exist\
open(READTEST, "iDoNotExist.dat")
    or die "Could not open file!";