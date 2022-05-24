# CatInBeard/charTranslit
## About
 PHP library for transliterating text from one language to another 
## Usage
You can use main function
`\catInBeard\charTranslit\Transliteration(string $string,string $to="en",string $from="all",bool $type=false):string`
### Parametrs
#### input
    Input string to transliterating
#### To
    Language into which transliteration. By default english "en"
#### From
    Language from which transliteration. By default from all languages "all"
#### type
    If true, then the translation is not transliteration, but the correspondence of characters on the keyboard   
To and from are case insensitive. [List of supported languages](#languages)  

If you need only one transliteration, you can use  
    1. `\catInBeard\charTranslit\enToRu`    
    2. `\catInBeard\charTranslit\ruToEn`   
    3. `\catInBeard\charTranslit\enToRuSym`   
    4. `\catInBeard\charTranslit\ruToEnSym`   
    5. `\catInBeard\charTranslit\enToDe`    
    6. `\catInBeard\charTranslit\deToEn`   
    7. `\catInBeard\charTranslit\enToDeSym`   
    8. `\catInBeard\charTranslit\deToEnSym`  
    9. `\catInBeard\charTranslit\enToGr`   
    9. `\catInBeard\charTranslit\grToEn`  
    9. `\catInBeard\charTranslit\enToGrSym`   
    9. `\catInBeard\charTranslit\grToEnSym`   

## <a name="languages"></a>Languages

    1. all (only for `from`)
    2. en
    3. ru
    4. de
    5. gr

FROM `all` used only when translating from one alphabet to another. For example, Cyrillic and Latin alphabets are used. 