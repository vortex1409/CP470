#make variables that will hold my name and stuff
$firstName = "";
$major="";
$favAnimal="";
$repeatCount=4;
$whileCount=0;
$forCount=12;

#Arrays and Hashes
@arrayOfFavStuff = ();
%daysInAMonth=();

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
