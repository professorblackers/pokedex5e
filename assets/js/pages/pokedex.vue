<template>
  <h2 v-if="pokemon.length >0">#{{ pokemon[index].pokedexNumber }}</h2>
  <h1 v-if="pokemon.length >0">{{ pokemon[index].name }}</h1>
  <img v-if="pokemon.length >0" :src="getPokemonImage"  data-adaptive-background="" class="pokemon-image">
  <div>
    <button @click="previousPokemon()">Previous</button>
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
    };
  },
  computed: {
    getPokemonImage() {
      return '/assets/images/pokemon/'+this.pokemon[this.index].pokedexNumber+this.pokemon[this.index].name+'.png';
    }
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
      this.getBackground()
    },
    previousPokemon: function () {
      this.index--;
      this.getBackground()
    },
  },
  created() {
    this.getPokemon();
  }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&family=Russo+One&display=swap');

body {
  font-family: 'Russo One', sans-serif;
  color: white;
  text-shadow: 2px 2px 4px #000000;
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