<template>
  <site-template>
    <span slot="menuesquerdo">
      <img src="@/assets/landing.svg" alt="Landing" class="responsive-img" />
    </span>
    <span slot="principal">
      <h2>Perfil</h2>
      <input type="text" placeholder="Nome" v-model="name" />
      <input type="email" placeholder="E-mail" v-model="email" />

      <div class="file-field input-field">
        <div class="btn">
          <span>Imagem</span>
          <input type="file" />
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" />
        </div>
      </div>

      <input type="password" placeholder="Senha" v-model="password" />
      <input
        type="password"
        placeholder="Confirmar Senha"
        v-model="password_confirmation"
      />
      <button class="btn mr-4" @click="perfil()">Atualizar</button>
    </span>
  </site-template>
</template>

<script>
import axios from 'axios'
import SiteTemplate from '../../templates/SiteTemplate'
export default {
  components: { SiteTemplate },
  data () {
    return {
      usuario: '',
      name: '',
      email: '',
      password: '',
      password_confirmation: ''
    }
  },
  created() {
    if (sessionStorage.getItem('usuario')) {
      this.usuario = JSON.parse(sessionStorage.getItem('usuario'))
      this.name = this.usuario.name
      this.email = this.usuario.email
    }
  },
  methods: {
    perfil () {
      axios.put(`http://127.0.0.1:8000/api/perfil`, {
        name: this.name,
        email: this.email,
        password: this.password,
        password_confirmation: this.password_confirmation,
      }, {"headers": {
        "authorization": `Bearer ${this.usuario.token}`
      }})
        .then(response => {
          if(response.data.token) {
            sessionStorage.setItem('usuario', JSON.stringify(response.data));
            alert("Atualizado!");
          } else {
            let erros = ''
            for(let erro of Object.values(response.data)) {
              erros += erro + ' '
            }
            alert(erros)
          }
        })
        .catch(e => {
          alert(e);
        })
    }
  }
}
</script>

<style>
.mr-4 {
  margin-right: 4px;
}
</style>