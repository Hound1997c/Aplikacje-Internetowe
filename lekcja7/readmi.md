Aplikacja cakephp
Upakowana forma klienta i serwera
dodawanie esuwanie edycia i widzenie zawartości tabel mysql: groups users books

nowe mechanizmy:

cakephp -> zwięzła implementacja kontrolera i widoków
cakephp -> cake bake all -> automatyczna implementacja dzialajacych kontrolerów i widoków


problemy:
-rozpakowanie raru do "cake" wsadzając tam folder "cakephp-2.10.20"
-przeniesienie zawartości "cakephp-2.10.20" do cake po implementacji kodu co zaskutkowało niedziałanie aplikacji
-nieooczekiwane niedziałanie aplikacji. Wyrzucało mi błąd, że w AppController nie ma funkcji index(). resetacja środowiska pomogła