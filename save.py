import cgi,sys
import cgitb; cgitb.enable()
file = open("storage.txt","w")
file.write("You are awesome");
file.close()
print("hi")