#! /usr/bin/env python3

cypherText=open("data.txt", "r").read()
print (cypherText)
alfabet=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']
plainText=range(len(cypherText))
i=0
for leter in cypherText:
    if leter != ' ' and leter  in alfabet and leter != '\n':
        temp=((alfabet.index(leter.lower())-13)%26)
        if leter.isupper():
            alfabet[temp]=alfabet[temp].upper()
            plainText[i]=alfabet[temp]
        plainText[i]=alfabet[temp]
        i+=1
finalstring=''.join(str(plainText))
print(alfabet)
print(finalstring)
# print((alfabet.index(leter)-13)%26)
