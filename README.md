# Operacje na bazie danych
Do wykonania operacji na bazie należy wykorzystać tabele osoby i hobby przedstawione na Obrazie 1.

Obraz 1. Tabele bazy danych


Uruchom usługi MySQL i Apache za pomocą XAMPP Control Panel. Za pomocą narzędzia phpMyAdmin wykonaj podane operacje na bazie danych:

Utwórz bazę danych o nazwie dane4
Do bazy dane4 zaimportuj plik dane.sql z rozpakowanego archiwum
Wykonaj zrzut ekranu po imporcie. Zrzut zapisz w folderze z numerem PESEL lub w przypadku jego braku w folderze z innym numerem, którym został podpisany arkusz, w formacie JPEG i nazwij egzamin. Nie kadruj zrzutu. Powinien on obejmować cały ekran monitora, z widocznym paskiem zadań. Na zrzucie powinny być widoczne elementy wskazujące na poprawnie wykonany import tabel
Zapisz i wykonaj zapytania SQL działające na bazie dane4. Zapytania zapisz w pliku kwerendy.txt, w folderze z numerem PESEL lub w przypadku jego braku w folderze z innym numerem, którym został podpisany arkusz. Wykonaj zrzuty ekranu przedstawiające wyniki działania kwerend. Zrzuty zapisz w formacie PNG i nadaj im nazwy kw1, kw2, kw3, kw4. Zrzuty powinny obejmować cały ekran monitora z widocznym paskiem zadań
Zapytanie 1: wybierające jedynie pola id, imie, nazwisko, rok_urodzenia, zdjecie z tabeli osoby. Kwerenda wybiera pierwsze 30 wierszy, należy jawnie wskazać liczbę wierszy
Zapytanie 2: wybierające jedynie pola imie, nazwisko, rok_urodzenia, opis, zdjecie z tabeli osoby oraz odpowiadające im pole nazwa z tabeli hobby dla osoby o id równym 10
Zapytanie 3: liczące średni rok urodzenia oraz najniższy i najwyższy rok urodzenia z tabeli osoby
Zapytanie 4: aktualizujące pole opis z tabeli osoby dla osób, których pole Hobby_id jest równe 4. Wartość nowego wpisu w polu opis jest dowolna będąca możliwym hobby
Witryna internetowa
Obraz 2. Witryna internetowa, strona users.php, podano wartość 10 w formularzu i zatwierdzono


Cechy grafiki:

Plik osoba1.jpg, wypakowany z archiwum, skadrowany do proporcji 1:1, tak aby była widoczna twarz osoby. Przeskalowany do rozmiaru dokładnie 100 px na 100 px
Pozostałe pliki graficzne są przygotowane i nie należy ich zmieniać.

Cechy witryny:

Składa się ze strony o nazwie users.php
Zastosowany właściwy standard kodowania polskich znaków
Tytuł strony widoczny na karcie przeglądarki: „Panel administratora”
Arkusz stylów w pliku o nazwie styl4.css prawidłowo połączony z kodem strony
Podział strony na bloki: baner, lewy i prawy, stopka. Podział zrealizowany za pomocą znaczników sekcji tak, aby wygląd układu bloków strony po uruchomieniu w przeglądarce, był zgodny z Obrazem 2
Zawartość banera: nagłówek trzeciego stopnia o treści „Portal Społecznościowy - panel administratora”
Zawartość bloku lewego:
Nagłówek czwartego stopnia o treści „Użytkownicy”
Efekt działania skryptu 1
Odsyłacz o treści „Inne ustawienia” prowadzący do strony settings.html (należy utworzyć plik settings.html i zapisać w nim treść: „strona w trakcie budowy”)
Zawartość bloku prawego:
Nagłówek czwartego stopnia o treści „Podaj id użytkownika”
Formularz wysyłający dane metodą post do tego samego pliku i zawierający:
pole edycyjne typu numerycznego
przycisk wysyłający dane o treści "ZOBACZ”
Linia pozioma
Efekt działania skryptu 2
Zawartość stopki: napis o treści „Stronę wykonał: ”, dalej wstawiony numer PESEL zdającego lub w przypadku jego braku inny numer, którym został podpisany arkusz
Styl CSS witryny internetowej
Cechy formatowania CSS:

Domyślne dla całej strony: krój czcionki Helvetica
Dla banera i stopki: kolor tła #AF4448, biały kolor czcionki, wyrównanie tekstu do środka, wysokość 20 px
Dla bloku lewego i prawego: kolor tła #FFA4A2, wysokość 650 px, szerokość 50%
Dla selektora nagłówka czwartego stopnia: marginesy zewnętrzne 0 px
Dla przycisku wysyłającego dane z formularza: kolor tła #AF4448, biały kolor czcionki, marginesy wewnętrzne 5 px, marginesy zewnętrzne 10 px
Skrypt
W Tabeli 1 podano wybór funkcji PHP do obsługi bazy danych. Wymagania dotyczące skryptu:

Napisany w języku PHP
Skrypt łączy się z serwerem bazy danych na localhost, użytkownik root bez hasła, baza danych o nazwie dane4
Po wykonaniu operacji na bazie danych skrypt zamyka połączenie z serwerem
Działanie skryptu 1 w panelu lewym
Wysyła do bazy danych zapytanie 1
Dla każdego wiersza zwróconego zapytaniem:
Oblicza wiek osoby na podstawie jej roku urodzenia
Wyświetla w osobnej linii treść: <id>. <imie> <nazwisko>, <wiek> lat, gdzie pola <id>, <imie>, <nazwisko> zostały pobrane z bazy, a <wiek> oznacza obliczony wiek osoby
Działanie skryptu 2 w panelu prawym wykonywanego po wypełnieniu formularza
Wysyła do bazy danych zapytanie 2, zmodyfikowane w ten sposób, że w warunku zamiast przypisanego numeru id równego 10, jest numer id przesłany z formularza
Wyświetla nagłówek drugiego stopnia o treści <id>. <imie> <nazwisko>, gdzie pole <id> jest identyfikatorem pobranym z formularza, a pola <imie>, <nazwisko> są polami pobranymi z bazy
Wyświetla zdjęcie tak, że źródłem jest plik o nazwie pobranej z bazy a tekstem alternatywnym jest identyfikator pobrany z formularza
Wyświetla trzy paragrafy (akapity) o treści, kolejno:
Rok urodzenia: <rok_urodzenia>, gdzie pole <rok_urodzenia> jest pobrane zapytaniem
Opis: <opis>, gdzie pole <opis> jest pobrane zapytaniem
Hobby: <nazwa>, gdzie pole <nazwa> jest pobrane zapytaniem
