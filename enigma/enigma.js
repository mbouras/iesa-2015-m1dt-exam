var Enigma = function (){

    this.encrypt = function(messageToEncrypt){
        //console.log("encrypt : ca marche");
        var myString = messageToEncrypt;
        myString = myString.replace("a", "j");
        myString = myString.replace("b", "d");
        myString = myString.replace("c", "w");
        myString = myString.replace("d", "o");
        myString = myString.replace("e", "v");
        myString = myString.replace("f", "a");
        myString = myString.replace("g", "r");
        myString = myString.replace("h", "i");
        myString = myString.replace("i", "g");
        myString = myString.replace("j", " ");
        myString = myString.replace("k", "x");
        myString = myString.replace("l", "u");
        myString = myString.replace("m", "n");
        myString = myString.replace("n", "s");
        myString = myString.replace("o", "y");
        myString = myString.replace("p", "q");
        myString = myString.replace("q", "c");
        myString = myString.replace("r", "p");
        myString = myString.replace("s", "'");
        myString = myString.replace("t", "f");
        myString = myString.replace("u", "m");
        myString = myString.replace("v", "z");
        myString = myString.replace("w", "t");
        myString = myString.replace("x", "k");
        myString = myString.replace("y", "h");
        myString = myString.replace("z", "b");
        myString = myString.replace(" ", "e");
        myString = myString.replace("'", "l");
        myString = myString.replace(".", ".");
        myString = myString.replace(",", ",");
        myString = myString.replace(":", ":");
        myString = myString.replace(";", ";");

        return myString;

    };   
    this.decrypt = function(messageToDecrypt){
        //console.log("decrypt : ça marche aussi");

        // function replaceAll(myString, stringToRemplace, replacementString) {return myString.replace(stringToRemplace,replacementString);
        // }

        var myString = messageToDecrypt;
        myString = myString.replace("j", "a");
        myString = myString.replace("d", "b");
        myString = myString.replace("w", "c");
        myString = myString.replace("o", "d");
        myString = myString.replace("v", "e");
        myString = myString.replace("a", "f");
        myString = myString.replace("r", "g");
        myString = myString.replace("i", "h");
        myString = myString.replace("g", "i");
        myString = myString.replace(" ", "j");
        myString = myString.replace("x", "k");
        myString = myString.replace("u", "l");
        myString = myString.replace("n", "m");
        myString = myString.replace("s", "n");
        myString = myString.replace("y", "o");
        myString = myString.replace("q", "p");
        myString = myString.replace("c", "q");
        myString = myString.replace("p", "r");
        myString = myString.replace("'", "s");
        myString = myString.replace("f", "t");
        myString = myString.replace("m", "u");
        myString = myString.replace("z", "v");
        myString = myString.replace("t", "w");
        myString = myString.replace("k", "x");
        myString = myString.replace("h", "y");
        myString = myString.replace("b", "z");
        myString = myString.replace("e", " ");
        myString = myString.replace("l", "'");
        myString = myString.replace(".", ".");
        myString = myString.replace(",", ",");
        myString = myString.replace(":", ":");
        myString = myString.replace(";", ";");

        return myString;
    };
};