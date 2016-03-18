<?php
// echo \App\Movie::all();
use App\Movie as Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    public function run()
    {
      // Este comando "desabilita" a proteção do método fill($data = []); nos models
        // Model::unguard();

        // Apaga toda a tabela de filmes
        // Movie::truncate();

        // $this->call(UserTableSeeder::class);
        $this->createMovies();
    }

    private function createMovies()
    {
        Movie::create([
            'name' => 'Deadpool',
            'description'  => '(2016) Baseado no anti-herói não convencional da Marvel Comics, Deadpool conta a história da origem do ex-agente das Forças Especiais que se tornou o mercenário Wade Wilson (Ryan Reynolds). Depois de ser submetido a um desonesto experimento que o deixa com poderes de cura acelerada, Wade adota o alter ego de Deadpool',
            'file_path' => 'img/deadpool.jpg'
        ]);

        Movie::create([
            'name' => 'Homem de Ferro',
            'description'  => '(2008) Tony Stark (Robert Downey Jr.) é um industrial bilionário, que também é um brilhante inventor. Ao ser sequestrado ele é obrigado por terroristas a construir uma arma devastadora mas, ao invés disto, constrói uma armadura de alta tecnologia que permite que fuja de seu cativeiro. A partir de então ele passa a usá-la para combater o crime, sob o alter-ego do Homem de Ferro.',
            'file_path' => 'img/iron-man.jpg'
        ]);
        Movie::create([
            'name' => 'Vingadores',
            'description'  => '(2012) Homem de Ferro (Robert Downey Jr.), Capitão América (Chris Evans), Hawkeye (Jeremy Renner), Hulk (Mark Ruffalo), Viúva Negra (Scarlett Johanson) e Nick Fury (Samuel L. Jackson) são alguns dos heróis da Marvel que se reúnem na agência de espionagem internacional S.H.I.E.L.D. para defender o planeta e a humanidade de ameaças intergalácicas. Só que, apesar do grande perigo que a Terra corre, não é tão simples assim conter o ego e os interesses de cada um deles para que possam agir em grupo.',
            'file_path' => 'img/avengers.jpg'
        ]);
        Movie::create([
            'name' => 'Batman - O Cavaleiro das Trevas',
            'description'  => '(2008) Dois anos depois, com a presença de Batman (Christian Bale) para defender os moradores de Gotham City, os criminosos têm muito o que temer. O Homem-Morcego, com a ajuda do tenente Jim Gordon (Gary Oldman) e do promotor público Harvey Dent (Aaron Eckhart), lutará contra o crime organizado, comandado por seu arquiinimigo, o Coringa (Heath Ledger).',
            'file_path' => 'img/batman-dark.jpg'
        ]);
        Movie::create([
            'name' => 'X-Men: Dias de um Futuro Esquecido',
            'description'  => 'No futuro, os mutantes são caçados impiedosamente pelos Sentinelas, gigantescos robôs criados por Bolívar Trask (Peter Dinklage). Os poucos sobreviventes precisam viver escondidos, caso contrário serão também mortos. Entre eles estão o professor Charles Xavier (Patrick Stewart), Magneto (Ian McKellen), Tempestade (Halle Berry), Kitty Pryde (Ellen Page) e Wolverine (Hugh Jackman), que buscam um meio de evitar que os mutantes sejam aniquilados. O meio encontrado é enviar a consciência de Wolverine em uma viagem no tempo, rumo aos anos 1970.',
            'file_path' => 'img/x-men-doapf.jpg'
        ]);
        Movie::create([
            'name' => 'Capitão América 2 - O Soldado Invernal ',
            'description'  => '(2014) Dois anos após os acontecimentos em Nova York (Os Vingadores – The Avengers), Steve Rogers (Chris Evans) continua seu dedicado trabalho com a agência S.H.I.E.L.D. e também segue tentando se acostumar com o fato de que foi descongelado e acordou décadas depois de seu tempo. Em parceria com Natasha Romanoff (Scarlett Johansson), também conhecida como Viúva Negra, ele é obrigado a enfrentar um poderoso e misterioso inimigo chamado Soldado Invernal, que visita Washington e abala o dia a dia da S.H.I.E.L.D., ainda liderada por Nick Fury (Samuel L. Jackson).',
            'file_path' => 'img/capam-winter.jpg'
        ]);
        Movie::create([
            'name' => 'O Homem de Aço',
            'description'  => '(2013) Um garoto descobre ter poderes extraordinários e não ser do planeta Terra. Ao se tornar um jovem homem, ele viaja para descobrir de onde veio e a razão pela qual foi enviado. Mas o herói dentro de si deve se manifestar se ele quiser salvar o mundo da aniquilação e se tornar um símbolo de esperança para a humanidade.',
            'file_path' => 'img/manofsteel.jpg'
        ]);
        Movie::create([
            'name' => 'Clube da Luta',
            'description'  => '(1999) Jack (Edward Norton) é um executivo jovem, trabalha como investigador de seguros, mora confortavelmente, mas ele está ficando cada vez mais insatisfeito com sua vida medíocre. Para piorar ele está enfrentando uma terrível crise de insônia, até que encontra uma cura inusitada para o sua falta de sono ao frequentar grupos de auto-ajuda. Nesses encontros ele passa a conviver com pessoas problemáticas como a viciada Marla Singer (Helena Bonham Carter) e a conhecer estranhos como Tyler Durden (Brad Pitt). Misterioso e cheio de ideias, Tyler apresenta para Jack um grupo secreto que se encontra para extravasar suas angústias e tensões através de violentos combates corporais.',
            'file_path' => 'img/fight-club.jpg'
        ]);
        Movie::create([
            'name' => 'O Poderoso Chefão',
            'description'  => '(1972) Nos Estados Unidos dos anos 40 e 50, a família Corleone – chefiada pelo patriarca Don Vito (Marlon Brando) – vive em constante confronto com outros grupos mafiosos pelo controle de vários negócios ilegais',
            'file_path' => 'img/godfather.jpg'
        ]);
        Movie::create([
            'name' => 'Matrix',
            'description'  => '(1999) Thomas Anderson é um jovem programador que fora das horas de serviço dá pelo nome de Neo e é um hacker. Nas suas buscas informáticas persegue a Matrix e um personagem que dá pelo nome de Morpheus. A esperança de encontrar as respostas que procura, leva-o a seguir o coelho branco, uma rapariga que o conduz a outra e a partir daí, a vida dele nunca mais será a mesma.',
            'file_path' => 'img/matrix.jpg'
        ]);
        Movie::create([
            'name' => 'O Silêncio dos Inocentes',
            'description'  => '(1991) A agente do FBI, Clarice Starling (Jodie Foster) é ordenada a encontrar um assassino que arranca a pele de suas vítimas. Para entender como ele pensa, ela procura o periogoso psicopata, Hannibal Lecter (Anthony Hopkins), encarcerado sob a acusação de canibalismo.',
            'file_path' => 'img/the-silence.jpg'
        ]);
        Movie::create([
            'name' => 'À Espera de um Milagre',
            'description'  => '(1999) Ambientado em 1935, no corredor da morte de uma prisão sulista, À espera de um milagre é a história entre o chefe de guarda da prisão (Tom Hanks) com um de seus prisioneiros (Michael Clarke Duncan). Aos poucos, desenvolve-se entre eles uma relação incomum, baseada na descoberta de que o prisioneiro possui um dom mágico que é, ao mesmo tempo, misterioso e milagroso.',
            'file_path' => 'img/green-mille.jpg'
        ]);
        Movie::create([
            'name' => 'Cidade de Deus',
            'description'  => '(2002) Buscapé (Alexandre Rodrigues) é um jovem pobre, negro e muito sensível, que cresce em um universo de muita violência. Buscapé vive na Cidade de Deus, favela carioca conhecida por ser um dos locais mais violentos da cidade. Amedrontado com a possibilidade de se tornar um bandido, Buscapé acaba sendo salvo de seu destino por causa de seu talento como fotógrafo, o qual permite que siga carreira na profissão. É através de seu olhar atrás da câmera que Buscapé analisa o dia-a-dia da favela onde vive, onde a violência aparenta ser infinita.',
            'file_path' => 'img/cidadededeus.jpg'
        ]);
        Movie::create([
            'name' => 'Tropa de Elite',
            'description'  => 'O dia-a-dia do grupo de policiais e de um capitão do BOPE (Wagner Moura), que quer deixar a corporação e tenta encontrar um substituto para seu posto. Paralelamente dois amigos de infância se tornam policiais e se destacam pela honestidade e honra ao realizar suas funções, se indignando com a corrupção existente no batalhão em que atuam. ',
            'file_path' => 'img/tropa-de-elite.jpg'
        ]);
        Movie::create([
            'name' => 'O Auto da Compadecida',
            'description'  => '(2000) As aventuras de João Grilo (Matheus Natchergaele), um sertanejo pobre e mentiroso, e Chicó (Selton Mello), o mais covarde dos homens. Ambos lutam pelo pão de cada dia e atravessam por vários episódios enganando a todos da pequena cidade em que vivem.',
            'file_path' => 'img/autodacompadecida.jpg'
        ]);
        Movie::create([
            'name' => 'Lisbela e o Prisioneiro',
            'description'  => '(2003) Comédia romântica que conta a história divertida do malandro, aventureiro e conquistador Leléu (Selton Mello) e da mocinha sonhadora Lisbela (Débora Falabella), que adora ver filmes americanos e sonha com os heróis do cinema. Lisbela está noiva e de casamento marcado, quando Leléu chega à cidade. O casal se encanta e passa a viver uma história de amor cheia de personagens tirados do cenário nordestino. Lisbela e Leléu vão sofrer pressões da família, do meio social e também com as suas próprias dúvidas e hesitações.',
            'file_path' => 'img/lisbela.jpg'
        ]);
        Movie::create([
            'name' => 'Spotlight: Segredos Revelados',
            'description'  => '(2016) Baseado em uma história real, o drama mostra um grupo de jornalistas em Boston que reúne milhares de documentos capazes de provar diversos casos de abuso de crianças, causados por padres católicos. Durante anos, líderes religiosos ocultaram o caso transferindo os padres de região, ao invés de puni-los pelo caso. ',
            'file_path' => 'img/spotlight.jpg'
        ]);
        Movie::create([
            'name' => 'O Regresso',
            'description'  => '(2016) 1822. Hugh Glass (Leonardo DiCaprio) parte para o oeste americano disposto a ganhar dinheiro caçando. Atacado por um urso, fica seriamente ferido e é abandonado à própria sorte pelo parceiro John Fitzgerald (Tom Hardy), que ainda rouba seus pertences. Entretanto, mesmo com toda adversidade, Glass consegue sobreviver e inicia uma árdua jornada em busca de vingança. ',
            'file_path' => 'img/revenant.jpg'
        ]);
        Movie::create([
            'name' => 'Mad Max: Estrada da Fúria',
            'description'  => '(2015) Após ser capturado por Immortan Joe, um guerreiro das estradas chamado Max (Tom Hardy) se vê no meio de uma guerra mortal, iniciada pela Imperatriz Furiosa (Charlize Theron) na tentativa se salvar um grupo de garotas. Também tentanto fugir, Max aceita ajudar Furiosa em sua luta contra Joe e se vê dividido entre mais uma vez seguir sozinho seu caminho ou ficar com o grupo.',
            'file_path' => 'img/madmax.jpg'
        ]);
        Movie::create([
            'name' => 'A Lista de Schindler',
            'description'  => '(1993) A inusitada história de Oskar Schindler (Liam Neeson), um sujeito oportunista, sedutor, "armador", simpático, comerciante no mercado negro, mas, acima de tudo, um homem que se relacionava muito bem com o regime nazista, tanto que era membro do próprio Partido Nazista (o que não o impediu de ser preso algumas vezes, mas sempre o libertavam rapidamente, em razão dos seus contatos). No entanto, apesar dos seus defeitos, ele amava o ser humano e assim fez o impossível, a ponto de perder a sua fortuna mas conseguir salvar mais de mil judeus dos campos de concentração. ',
            'file_path' => 'img/schindler.jpg'
        ]);

        // Exibe uma informação no console durante o processo de seed
        $this->command->info('Movies created');
    }
}
