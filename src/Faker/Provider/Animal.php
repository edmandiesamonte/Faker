<?php


namespace Faker\Provider;

/**
 * @author edmandiesamonte
 */
class Animal extends Base {
    
    protected static $animalNames = [
        'Aardvark',
        'Abyssinian',
        'Affenpinscher',
        'Akbash',
        'Akita',
        'Albatross',
        'Alligator',
        'Alpaca',
        'Angelfish',
        'Ant',
        'Anteater',
        'Antelope',
        'Ape',
        'Armadillo',
        'Ass',
        'Avocet',
        'Axolotl',
        'Baboon',
        'Badger',
        'Balinese',
        'Bandicoot',
        'Barb',
        'Barnacle',
        'Barracuda',
        'Bat',
        'Beagle',
        'Bear',
        'Beaver',
        'Bee',
        'Beetle',
        'Binturong',
        'Bird',
        'Birman',
        'Bison',
        'Bloodhound',
        'Boar',
        'Bobcat',
        'Bombay',
        'Bongo',
        'Bonobo',
        'Booby',
        'Budgerigar',
        'Buffalo',
        'Bulldog',
        'Bullfrog',
        'Burmese',
        'Butterfly',
        'Caiman',
        'Camel',
        'Capybara',
        'Caracal',
        'Caribou',
        'Cassowary',
        'Cat',
        'Caterpillar',
        'Catfish',
        'Cattle',
        'Centipede',
        'Chameleon',
        'Chamois',
        'Cheetah',
        'Chicken',
        'Chihuahua',
        'Chimpanzee',
        'Chinchilla',
        'Chinook',
        'Chipmunk',
        'Chough',
        'Cichlid',
        'Clam',
        'Coati',
        'Cobra',
        'Cockroach',
        'Cod',
        'Collie',
        'Coral',
        'Cormorant',
        'Cougar',
        'Cow',
        'Coyote',
        'Crab',
        'Crane',
        'Crocodile',
        'Crow',
        'Curlew',
        'Cuscus',
        'Cuttlefish',
        'Dachshund',
        'Dalmatian',
        'Deer',
        'Dhole',
        'Dingo',
        'Dinosaur',
        'Discus',
        'Dodo',
        'Dog',
        'Dogfish',
        'Dolphin',
        'Donkey',
        'Dormouse',
        'Dotterel',
        'Dove',
        'Dragonfly',
        'Drever',
        'Duck',
        'Dugong',
        'Dunker',
        'Dunlin',
        'Eagle',
        'Earwig',
        'Echidna',
        'Eel',
        'Eland',
        'Elephant',
        'Elephant seal',
        'Elk',
        'Emu',
        'Falcon',
        'Ferret',
        'Finch',
        'Fish',
        'Flamingo',
        'Flounder',
        'Fly',
        'Fossa',
        'Fox',
        'Frigatebird',
        'Frog',
        'Galago',
        'Gar',
        'Gaur',
        'Gazelle',
        'Gecko',
        'Gerbil',
        'Gharial',
        'Giant Panda',
        'Gibbon',
        'Giraffe',
        'Gnat',
        'Gnu',
        'Goat',
        'Goldfinch',
        'Goldfish',
        'Goose',
        'Gopher',
        'Gorilla',
        'Goshawk',
        'Grasshopper',
        'Greyhound',
        'Grouse',
        'Guanaco',
        'Guinea fowl',
        'Guinea pig',
        'Gull',
        'Guppy',
        'Hamster',
        'Hare',
        'Harrier',
        'Havanese',
        'Hawk',
        'Hedgehog',
        'Heron',
        'Herring',
        'Himalayan',
        'Hippopotamus',
        'Hornet',
        'Horse',
        'Human',
        'Hummingbird',
        'Hyena',
        'Ibis',
        'Iguana',
        'Impala',
        'Indri',
        'Insect',
        'Jackal',
        'Jaguar',
        'Javanese',
        'Jay',
        'Jay, Blue',
        'Jellyfish',
        'Kakapo',
        'Kangaroo',
        'Kingfisher',
        'Kiwi',
        'Koala',
        'Komodo dragon',
        'Kouprey',
        'Kudu',
        'Labradoodle',
        'Ladybird',
        'Lapwing',
        'Lark',
        'Lemming',
        'Lemur',
        'Leopard',
        'Liger',
        'Lion',
        'Lionfish',
        'Lizard',
        'Llama',
        'Lobster',
        'Locust',
        'Loris',
        'Louse',
        'Lynx',
        'Lyrebird',
        'Macaw',
        'Magpie',
        'Mallard',
        'Maltese',
        'Manatee',
        'Mandrill',
        'Markhor',
        'Marten',
        'Mastiff',
        'Mayfly',
        'Meerkat',
        'Millipede',
        'Mink',
        'Mole',
        'Molly',
        'Mongoose',
        'Mongrel',
        'Monkey',
        'Moorhen',
        'Moose',
        'Mosquito',
        'Moth',
        'Mouse',
        'Mule',
        'Narwhal',
        'Neanderthal',
        'Newfoundland',
        'Newt',
        'Nightingale',
        'Numbat',
        'Ocelot',
        'Octopus',
        'Okapi',
        'Olm',
        'Opossum',
        'Orang-utan',
        'Oryx',
        'Ostrich',
        'Otter',
        'Owl',
        'Ox',
        'Oyster',
        'Pademelon',
        'Panther',
        'Parrot',
        'Partridge',
        'Peacock',
        'Peafowl',
        'Pekingese',
        'Pelican',
        'Penguin',
        'Persian',
        'Pheasant',
        'Pig',
        'Pigeon',
        'Pika',
        'Pike',
        'Piranha',
        'Platypus',
        'Pointer',
        'Pony',
        'Poodle',
        'Porcupine',
        'Porpoise',
        'Possum',
        'Prairie Dog',
        'Prawn',
        'Puffin',
        'Pug',
        'Puma',
        'Quail',
        'Quelea',
        'Quetzal',
        'Quokka',
        'Quoll',
        'Rabbit',
        'Raccoon',
        'Ragdoll',
        'Rail',
        'Ram',
        'Rat',
        'Rattlesnake',
        'Raven',
        'Red deer',
        'Red panda',
        'Reindeer',
        'Rhinoceros',
        'Robin',
        'Rook',
        'Rottweiler',
        'Ruff',
        'Salamander',
        'Salmon',
        'Sand Dollar',
        'Sandpiper',
        'Saola',
        'Sardine',
        'Scorpion',
        'Sea lion',
        'Sea Urchin',
        'Seahorse',
        'Seal',
        'Serval',
        'Shark',
        'Sheep',
        'Shrew',
        'Shrimp',
        'Siamese',
        'Siberian',
        'Skunk',
        'Sloth',
        'Snail',
        'Snake',
        'Snowshoe',
        'Somali',
        'Sparrow',
        'Spider',
        'Sponge',
        'Squid',
        'Squirrel',
        'Starfish',
        'Starling',
        'Stingray',
        'Stinkbug',
        'Stoat',
        'Stork',
        'Swallow',
        'Swan',
        'Tang',
        'Tapir',
        'Tarsier',
        'Termite',
        'Tetra',
        'Tiffany',
        'Tiger',
        'Toad',
        'Tortoise',
        'Toucan',
        'Tropicbird',
        'Trout',
        'Tuatara',
        'Turkey',
        'Turtle',
        'Uakari',
        'Uguisu',
        'Umbrellabird',
        'Vicuña',
        'Viper',
        'Vulture',
        'Wallaby',
        'Walrus',
        'Warthog',
        'Wasp',
        'Water buffalo',
        'Weasel',
        'Whale',
        'Whippet',
        'Wildebeest',
        'Wolf',
        'Wolverine',
        'Wombat',
        'Woodcock',
        'Woodlouse',
        'Woodpecker',
        'Worm',
        'Wrasse',
        'Wren',
        'Yak',
        'Zebra',
        'Zebu',
        'Zonkey',
        'Zorse',
    ];
    
    /**
     * @example 'Vulture'
     */
    public static function animal() {
        return static::randomElement( static::$animalNames );
    }
}