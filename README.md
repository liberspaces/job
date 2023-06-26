    +--------------+     1       1..*     +--------------+
    |   Services   |---------------------|  Price Lists |
    +--------------+                     +--------------+
    | id           |                     | id           |
    | name         |                     | service_id   |
    | description  |                     | price        | 
    | ...          |                     | ...          |
    +--------------+                     +--------------+
          |                                    |
          |                                    |
          |                           1        |
          |                     +--------------+
          |---------------------|    Points    |
                                +--------------+
                                | id           |
                                | name         |
                                | ...          |
                                +--------------+
                                | is_active    |
                                +--------------+
                                | | | | | | | |
                                |               |
                                | 1         1   |
                                |               |
                    +--------------+     +--------------+
                    |  Sales       |     |   Customers  |
                    +--------------+     +--------------+
                    | id           |     | id           |
                    | service_id   |     | name         |
                    | point_id     |     | ...          |
                    | quantity     |     +--------------+
                    | total_amount |
                    | created_at   |
                    +--------------+
I nomi dei file nella directory del progetto corrispondono ai diversi componenti e alle funzionalità del sistema. Ecco una spiegazione di ciascun file:

    PriceList.php: Questo file rappresenta la classe di modello per l'entità PriceList. Definisce la struttura e il comportamento dell'oggetto PriceList, compresi i suoi attributi e le relazioni con altre entità.

    PriceListController.php: Questo file contiene la classe del controller per gestire le operazioni relative alle entità PriceList. Definisce metodi per recuperare, creare, aggiornare ed eliminare record di PriceList. Il controller interagisce con il modello per eseguire queste operazioni.

    README.md: Questo file fornisce documentazione e istruzioni per il progetto. Tipicamente include informazioni sullo scopo del progetto, passaggi per l'installazione, linee guida per l'uso e altri dettagli rilevanti.

    Service.php: Questo file rappresenta la classe di modello per l'entità Service. Definisce la struttura e il comportamento dell'oggetto Service, compresi i suoi attributi e le relazioni con altre entità.

    ServicesController.php: Questo file contiene la classe del controller per gestire le operazioni relative alle entità Service. Definisce metodi per recuperare, creare, aggiornare ed eliminare record di Service. Il controller interagisce con il modello per eseguire queste operazioni.

    index.php: Questo file è il punto di ingresso dell'applicazione. Serve come file principale che viene eseguito quando si accede all'applicazione. Tipicamente si occupa di gestire il routing e l'inizializzazione dei componenti necessari del framework.

    migrations.sql: Questo file contiene le istruzioni SQL utilizzate per creare le tabelle del database e definire la loro struttura. Rappresenta le migrazioni per la configurazione dello schema del database.

Ogni nome di file corrisponde a un componente o a una funzionalità specifica del sistema. I modelli rappresentano le entità dell'applicazione, i controller gestiscono la logica e le azioni relative a tali entità, il README.md fornisce la documentazione e index.php serve come punto di ingresso. Infine, migrations.sql rappresenta le istruzioni SQL per creare la struttura del database.

Insieme, questi file contribuiscono all'implementazione del sistema e facilitano l'organizzazione e la separazione delle responsabilità all'interno del progetto.
