Pierwsza w htmlu jest tabelka.
co drugi wiersz zapala się na kolor aqua
Pod tabelą jest przycisk.
Naciśniemy to zmienia się kolejność. wszystko przesuwa się w dół, a na 
pierwsze miejsce wchodzi ostatni wiersz.

Potem jest formularz z kilkoma atrybutami.
po kliknięciu "prześlij" uruchamia się funkcja  "validate w form_check.js
Jak jakiś atrybut jest źle wpisany to sie obok pojawia czerwony span
z odpowiednim tekstem w innerHtml
poprawność emaila jest sprawdzana za pomocą wzoru języka naturalnego.
Jak się poprawi ten atrybut na właściwy to przy kolejnej próbie wysłania formularza znikie z widoku span bo inerHtml=""
Jest też atrybut  "nazwisko panienskie" które pokazuje się tylko wtedy jeśli w radiu płeć wybierzemy kobietę. Wówczas "tr_nazwisko_p" będzie widoczne
a jak mężczyznę to zniknie.


mechanizmy
-validacja w js
-wykorzystanie struktury drzewiastej do siblingów

nowe zagadnienia:
-język naturalny - wyrażenia podobne w javascripcie
-użycie "let" zamiast "var" w js


