# CatInBeard/charTranslit
## About
 PHP library for transliterating text from one language to another 
## Usage
You can use main function
`\catInBeard\charTranslit\Transliteration(string $input,string $to="en",string $from="all",bool $type=false):string`
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

## <a name="languages"></a>Languages
    1. all (only for `from`)
    2. en
    3. ru