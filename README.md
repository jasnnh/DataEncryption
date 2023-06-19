# DataEncryption
In this example we will be showing the Caesar's cypher

There are a lot of uses and need for data encryption in today's society. Growing up i mainly seen it in games and online games as a way to protect their
save files & their online games from hackers.

Caesar's cypher is encrypting each letter with a key resulting a new letter and to unlock it the key must be the same to decrypt it. some people use a = 1, b = 2, c = 3
and then shift the key up to encrypt and down to decrypt for example:

key = 3

a = 1 + key, then a would now equal d.

The encryption method that i like to use is more complex, i convert the letter to the ASCII code then shift it with the key. for example A = 065

key = 10

A = 065 + key = 075, so now the value of A is now K and if we minus 10 on the encrypted letter then it returns back to A and we can easily read it.

I used to use this encryption method in my mobile game Sacred Guardians, to protect it's packet data.

now there are additional steps that we can take to secure the data even further by default the data should be in HEX format instead of readable string so we would convert the
string to HEX so instead of seeing data over packet sniffer looking like "hello my name is jason" it would look like "68656c6c6f206d79206e616d65206973206a61736f6e" it's unreadable
to the average user, but to a hacker they would know the encoding to switch it to readable string then find the key to decrypt the data.
