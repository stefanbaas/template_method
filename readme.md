####Welk design pattern is gekozen?
Template method design pattern

####Wat zijn de kenmerken (toegevoegde waarde) van dit design pattern?
Bij dit patroon maak je een abstracte klasse, deze bevat zowel abstracte methoden en niet-abstracte methoden. De subklassen die deze abstracte klasse uitbreiden, overschrijven deze methoden. De abstracte methoden moeten altijd in de subklassen gedefinieerd worden.  Doordat je de klasse uitbreid zijn alle methodes uit de abstracte klasse beschikbaar in de subklassen.

####Welke concept is bedacht om het pattern te kunnen toepassen?
Ik heb een pizza-generator bedacht, die de stappen teruggeeft die je moet doorlopen om de pizza te maken. Iedere pizza heeft altijd deeg, moet gebakken worden en moet ingepakt worden. Daarnaast is het afhankelijk van welke pizza je maakt of er vlees, groentes, kaas en/of saus toegevoegd moet worden. Hiervoor heb ik abstracte methodes gemaakt addMeat,  addCheese, addVegetables en addCondiments. In de subklassen worden deze abstracte methodes gedefinieerd en returned de ingrediënten die nodig zijn voor de pizza. In de abstracte klasse is een functie makePizza, deze print alle stappen voor het maken van de pizza.

####Wat zijn de responsibilities van de geïmplementeerde classes?
Iedere sub-klasse moet voldoen aan de abstracte klasse. Iedere pizza heeft dezelfde functies, maar geven ieder andere waardes terug. De pizza-generator moet bij verschillende pizza’s andere waardes terug geven. Zo heeft een ‘pizza salami’ vlees op de pizza en een ‘vegetarische pizza’ geen vlees, maar groentes. 

####In welk opzicht wordt polymorfie bereikt?
Doordat er een abstracte klasse wordt gemaakt met abstracte methodes, kan je met sub-klassen deze gemakkelijk uitbreiden. De sub-klassen hebben ieder dezelfde functies, maar geven andere waardes terug.
