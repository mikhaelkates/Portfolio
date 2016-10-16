using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TextAdventureApp
{
    class Program
    {


        class Character
        {
            //prepare all of the character stats
            protected static string CharacterClass;
            protected static string name;
            public List<string> inventory = new List<string>();
            protected int powerInc;
            protected int level
            {
                get; set;
            }
            protected int health
            {
                get; set;
            }
            protected int power
            {
                get; set;
            }
            protected int experience
            {
                get; set;
            }


            //build the base character functions
            public void attack()
            {
                Console.WriteLine("{0} does {1} damage", name, power);
            }
            public void add()
            {

                Console.Write("Add: ");
                string item = Console.ReadLine();
                inventory.Add(item);
                Console.WriteLine("{0} added to your backpack", item);
            }
            public void openBackpack()
            {
                Console.WriteLine("Backpack Opened:");
                foreach (string thing in inventory)
                {
                    Console.WriteLine(thing);
                }
            }
            public void move()
            {
                Console.Write("Direction: ");
                string myDirection = Console.ReadLine();
                Console.WriteLine("You travel {0}", myDirection);
            }
            public List<string> options = new List<string>() { "run - run from the forest", "attack - attack your foe", "backpack - open your backpack", "add - add an item to your backpack" };


            //constructor function. sets all starting values
            public Character(string nm, int lvl, int hp, int pwr)
            {
                level = lvl;
                health = hp * lvl;
                name = nm;
                powerInc = pwr;
                power = pwr * lvl;
            }


            //developer functions only
            public void xp()
            {
                Console.WriteLine(experience);
            }
            public void lvl()
            {
                Console.WriteLine(level);
            }
        }
        class Wizard : Character
        {
            public void fireball()
            {
                var setPwr = power;
                power = power * 4;
                attack();
                power = setPwr;
            }
            public Wizard(string nm, int lvl, int hp, int pwr) : base(nm, lvl, hp, pwr)
            {
                CharacterClass = "Wizard";
                inventory.Add("Spellbook");
            }
        }
        class Fighter : Character
        {

            public Fighter(string nm, int lvl, int hp, int pwr) : base(nm, lvl, hp, pwr)
            {
                CharacterClass = "Fighter";
                inventory.Add("Greatsword");
            }
        }
        class Rogue : Character
        {

            public Rogue(string nm, int lvl, int hp, int pwr) : base(nm, lvl, hp, pwr)
            {
                CharacterClass = "Rogue";
                inventory.Add("Dagger");
            }
        }
        class Cleric : Character
        {

            public Cleric(string nm, int lvl, int hp, int pwr) : base(nm, lvl, hp, pwr)
            {
                CharacterClass = "Cleric";
                inventory.Add("Mace");
            }
        }
        class Ranger : Character
        {

            public Ranger(string nm, int lvl, int hp, int pwr) : base(nm, lvl, hp, pwr)
            {
                CharacterClass = "Ranger";
                inventory.Add("Longbow");
            }
        }
        static void Main(string[] args)
        {
            Console.WriteLine("'Greetings, Adventurer! Welcome to Sharpwood Forest! What is your name?'");



            /*
            Random rnd = new Random();
            int mod = rnd.Next(0,100);
            Console.WriteLine(mod);
            */




            var myName = Console.ReadLine();
            Character Me;
            Console.WriteLine();
            Console.WriteLine($"'Well met, {myName}! I am Ser Fredrick,");
            Console.WriteLine("Defender of the Realm and Hero of Stormgald");
            Console.WriteLine("What is your profession?'");
            Console.WriteLine("There are 5 classes in Sharpwood Tales:");
            Console.WriteLine("Wizard, Fighter, Celeric, Ranger, and Rogue");
            string myClass = Console.ReadLine();
            switch (myClass)
            {
                case "Wizard":
                    Me = new Wizard(nm: myName, lvl: 1, hp: 4, pwr: 10);
                    break;
                case "Fighter":
                    Me = new Fighter(nm: myName, lvl: 1, hp: 10, pwr: 8);
                    break;
                case "Cleric":
                    Me = new Cleric(nm: myName, lvl: 1, hp: 8, pwr: 6);
                    break;
                case "Rogue":
                    Me = new Rogue(nm: myName, lvl: 1, hp: 6, pwr: 4);
                    break;
                case "Ranger":
                    Me = new Ranger(nm: myName, lvl: 1, hp: 8, pwr: 8);
                    break;
                default:
                    Me = new Character(nm: myName, lvl: 1, hp: 10, pwr: 10);
                    break;
            }
            Console.WriteLine($"'Excellent! We can always use an extra {myClass} around here! ");
            Console.WriteLine("Well, I will be spending the next few days hunting in Sharpwood, ");
            Console.WriteLine("so if you ever need any help, feel free to call for me!'");
            Console.WriteLine("To get a list of commands type 'Fredrick!', he'll come running over to help");
            Console.WriteLine("Ser Fredrick galavants off into the forest, leaving you at the edge of the woods, your wits about you.");
            string action = "";
            while (action != "exit")
            {
                action = Console.ReadLine();
                Console.WriteLine();
                switch (action)
                {
                    case "attack":
                        Me.attack();
                        break;
                    case "run":
                        action = "exit";
                        break;
                    case "backpack":
                        Me.openBackpack();
                        break;
                    case "add":
                        Me.add();
                        break;
                    case "move":
                        Me.move();
                        break;
                    case "Fredrick!":
                        foreach (string option in Me.options)
                        {
                            Console.WriteLine(option);
                        }
                        break;
                    default:
                        Console.WriteLine("You cannot do that");
                        break;

                }
                Console.WriteLine();
            }

        }
    }
}
