#!/bin/python
# Capitalize frequent words

import requests


def capitalize(word=""):
    capitalized = word

    csv_url = "https://raw.githubusercontent.com/anytizer/capitalizer.php/master/src/anytizer/words.csv"
    csv = requests.get(csv_url)
    for entity in csv.text.splitlines():
        if word.upper() == entity:
            capitalized = entity
            break
    return capitalized


if __name__ == "__main__":
    c = capitalize('id')
    d = capitalize('country')
    assert c == "ID", "Not capitalized properly"
    assert d == "country", "Wrongly capitalized"
