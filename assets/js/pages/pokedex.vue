<template>
  <h2>#{{ pokemonDetails.pokedexNumber }}</h2>
  <h1>{{ pokemonDetails.pokemonName }}</h1>
  <img :src="pokemonDetails.pokemonImage" data-adaptive-background="" class="pokemon-image" :alt="pokemonDetails.pokemonName">
  <div>
    <button @click="nextPokemon()">Next</button>
  </div>
</template>

<script>
export default {
  name: 'Pokedex',
  data() {
    return {
      pokemon: [],
      index: 0,
      pokemonDetails: {
        pokedexNumber: '001',
        pokemonName: 'Bulbasaur',
        pokemonImage: '/assets/images/pokemon/001Bulbasaur.png'
      }
    };
  },
  methods: {
    getPokemon: function() {
      $.ajax({
        type: "GET",
        url: "/pokemon/",
        success: (data) => {
          this.pokemon = data;
        }
      })
    },
    getBackground: function () {
      $(document).ready(function(){
        $.adaptiveBackground.run();
      });
    },
    nextPokemon: function () {
      this.index++;
      this.getPokemonDetails()
      this.getBackground()
    },
    getPokemonDetails: function () {
      this.pokemonDetails.pokemonName = this.pokemon[this.index].name;
      this.pokemonDetails.pokedexNumber = this.pokemon[this.index].pokedexNumber;
      this.pokemonDetails.pokemonImage = '/assets/images/pokemon/'+this.pokemonDetails.pokedexNumber+this.pokemonDetails.pokemonName+'.png';
    }
  },
  created() {
    this.getPokemon();
    this.getBackground();
  }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&family=Russo+One&display=swap');

body {
  font-family: 'Russo One', sans-serif;
}

#pokedex {
  height: 100vH;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.pokemon-image {
  max-width: 400px;
  height: auto;
}
</style>