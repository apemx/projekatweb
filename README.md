Projekat preko Composer dostavlja pakete
Projekat koristi php-framework "Laravel" 
dopunske pakete:
Spatie-alat za permisije i rolove 
Blade-za komponente za view
PhpOffice-za generisanje PDF i Excel formata
tailwind-za stilizovanje 


Od paterna koriscen: 
-MVC
    
-Atomic Design Pattern (za komponente)


Ideja projekta je:
Da guest moze da vidi sve dostupne nekretnine ali ako bih hteo da zakaze ,u slucaju da nije logovan,  redirektuje se na login page
Ako nema postojeceg acc on bi trebao da se registruje zatim da se uloguje 
Kada se registruje on dobije role:user i permisije za sam role
Svaki od rolova ima razlicit view i funkcionalnost
    User-pregled ponuda,zakazivanje,odgovor na zahtev za zakazivanje
    agent-moze da postavlja,edituje,brise nekretnine kao i da ih ispise u pdf/excel format ,moze da moze odgovora na zahteve i da vidi istoriju zahteva i omogucen mu je search po userima za zahteve
    admin-moze da upravlja korisnicima,nekretninama ,lokacijama ,tipovima nekretnina...


