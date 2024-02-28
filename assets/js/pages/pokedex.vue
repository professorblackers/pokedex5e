<template>

  <div class="pokedex-header">
    <img v-if="pokemon.length >0" :src="getPokemonImage" data-adaptive-background="" :alt="pokemon[index].name" style="padding-bottom: 20px; padding-top: 10px; width: 5%; height: auto">
    <h1 v-if="pokemon.length >0">{{ pokemon[index].name }}</h1>
    <h1 class="left-item" v-if="pokemon.length >0">#{{ pokemon[index].pokedexNumber }}</h1>
    <h1 class="right-item" v-if="pokemon.length >0">Stage {{ pokemon[index].stage }} | SR {{ pokemon[index].speciesRating }}</h1>
  </div>

  <div class="row" style="max-width: 100%">
    <div class="col-md-4">
      <div class="pokedex-container">
        <div>
          <p v-if="pokemon[index].secondaryType">Type: {{ pokemon[index].primaryType }} & {{ pokemon[index].secondaryType }}</p>
          <p v-else>Type: {{ pokemon[index].primaryType }}</p>
          <p>Resistance: {{ pokemon[index].resistance }}</p>
          <p>Immune: {{ pokemon[index].immune }}</p>
          <p>Weakness: {{ pokemon[index].vulnerable }}</p>
          <p v-if="pokemon[index].abilityTwo">Abilities: {{ pokemon[index].abilityOne }} & {{ pokemon[index].abilityTwo }}</p>
          <p v-else>Ability: {{ pokemon[index].abilityOne }}</p>
          <p>Hidden Ability: {{ pokemon[index].hiddenAbility }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="pokedex-container">
        <div>
          <p>AC: {{ pokemon[index].armorClass }}</p>
          <p>Hit Points: {{ pokemon[index].hitPoints }} | Hit Dice: {{ pokemon[index].hitDice }}</p>
          <p>Strength: {{ pokemon[index].strength }}</p>
          <p>Dexterity: {{ pokemon[index].dexterity }}</p>
          <p>Constitution: {{ pokemon[index].constitution }}</p>
          <p>Intelligence: {{ pokemon[index].intelligence }}</p>
          <p>Wisdom: {{ pokemon[index].wisdom }}</p>
          <p>Charisma: {{ pokemon[index].charisma }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="pokedex-container">
        <div>

        </div>
      </div>
    </div>
  </div>
  <div class="pokedex-footer">
    <button class="left-item" @click="previousPokemon()" :disabled="isDisabled('previous')">Previous</button>
    <button class="right-item" @click="nextPokemon()" :disabled="isDisabled('next')">Next</button>
  </div>
</template>

<script>
export default {
  name: 'Pokedex',
  data() {
    return {
      pokemon: [],
      index: 0
    };
  },
  computed: {
    getPokemonImage() {
      return '/assets/images/pokemon/'+this.pokemon[this.index].pokedexNumber+'.png';
    },
    getPrimaryType() {
      return '/assets/images/types/'+this.pokemon[this.index].primaryType+'.png';
    },
    getSecondaryType() {
      return '/assets/images/types/'+this.pokemon[this.index].secondaryType+'.png';
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
        $('img.pokemon-image').on('ab-color-found', function(){
          var currentBackgroundColor = $('img.pokemon-image').attr('data-ab-color');
          $('.pokemon-header').css('background-color', currentBackgroundColor);
        });
        var defaults = {
          exclude: [
            'rgb(0,0,0)',
            'rgb(16,16,16)',
            'rgb(255,255,255)',
            'rgb(24,24,24)',
            'rgb(238,238,255)',
            'rgb(238,238,238)',
            'rgb(246,246,255)'
          ],
        }
        $.adaptiveBackground.run(defaults);
      });
    },
    previousPokemon() {
      this.index = Math.max(0, this.index - 1);
      this.getBackground();
    },
    nextPokemon() {
      this.index = Math.min(this.pokemon.length - 1, this.index + 1);
      this.getBackground();
    },
    isDisabled(direction) {
      if (direction === 'previous') {
        return this.index === 0;
      } else if (direction === 'next') {
        return this.index === this.pokemon.length - 1;
      }
    }
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
  background: #ECE9E6;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

#pokedex {
  height: 100vh;
}

.pokedex-header {
  color: white;
  text-shadow: 2px 2px 4px #000000;
  display: flex;
  width: 100%;
  justify-content: center;
  align-items: center;
  background-color: rgb(141, 206, 193);
}

.pokedex-footer {
  position: fixed;
  width: 100%;
  bottom: 0;
  padding-bottom: 3rem;
}

.pokedex-container {
  display: flex;
  padding-left: 1rem;
  padding-top: 1rem;
}

.left-item {
  position: absolute;
  left: 5rem
}

.right-item {
  position: absolute;
  right: 5rem
}
</style>