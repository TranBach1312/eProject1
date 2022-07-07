string = str("Xin Chào , tôi là  sInh viêN")
if(string[0].islower()):
    string = string.lower()
else:
    string = string.lower()
    string = string.capitalize()
letters = string.split()
string = ""
for index in range(len(letters)):
    if(index == 0 or letters[index] in [",",":", ".", ";"]) :
        string += letters[index]
    else:
        string += " " + letters[index]
print(string)    
