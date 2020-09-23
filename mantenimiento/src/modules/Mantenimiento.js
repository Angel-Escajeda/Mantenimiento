import Vue from 'vue'

export default{
	namespaced: true,
	state:{
    mantenimiento: [],
		loading: true,
	},

	mutations:{
		MANTENIMIENTO(state, data){
			state.llamadas = data
    },
    LOADING(state, data){
			state.loading = data; 
		},
	},
	actions:{
		consultaMantenimiento({commit}, payload){
			// Limpio Arreglo y Genero Consulta
			commit('MANTENIMIENTO', []); commit('LOADING',true);
			Vue.http.post('mantenimientos', payload).then(response=>{
				commit('MANTENIMIENTO', response.body)
			}).catch((error)=>{
				console.log('error',error)
			}).finally(() => commit('LOADING', false)) 
		},
	
  },

	getters:{
		getMantenimiento(state){
		  return state.mantenimiento
    },
    
    Loading(state){
			return state.loading
		},

	}
}