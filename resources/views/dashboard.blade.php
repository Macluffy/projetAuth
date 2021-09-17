<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <section>
        <div class="m-5">
            <a href="/home" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white;">Retours vers le site</a>
        </div>
        
        
        <div style='display:flex; justify-content:center; flex-wrap:wrap;'>
            <div style="margin: 2rem; display:flex; flex-direction:column; align-items:center; ">
                <h5>Modifier Header</h5>
                <p>CRUD Header</p>
                <a class="text-center" href="/Modif/header " style="width:200px;  background-color: rgb(102, 168, 212); padding: 20px; color:white;" >Direction Header</a>
                
            </div>
            
            <div style="margin: 2rem; display:flex; flex-direction:column; align-items:center;">
                <h5>Modifier Portfolio</h5>
                <p>CRUD Portfolio</p>
                <a class="text-center" href="/Modif/portfolio" style="width:200px;  background-color: rgb(102, 168, 212); padding: 20px; color:white;" >Direction Porfolio</a>
                
            </div>
            
            <div style="margin: 2rem; display:flex; flex-direction:column; align-items:center;">
                <h5>Modifier About</h5>
                <p>CRUD About</p>
                <a class="text-center" href="/Modif/about" style="width:200px;  background-color: rgb(102, 168, 212); padding: 20px; color:white;" >Direction About</a>
                
            </div>
            
            <div style="margin: 2rem; display:flex; flex-direction:column; align-items:center;">
                <h5>Modifier Contacts</h5>
                <p>CRUD Contact</p>
                <a class="text-center" href="/Modif/contact" style="width:200px;  background-color: rgb(102, 168, 212); padding: 20px; color:white;" >Direction contact</a>
                
            </div>

            <div style="margin: 2rem; display:flex; flex-direction:column; align-items:center;">
                <h5>Modifier Footer</h5>
                <p>CRUD Footer</p>
                <a class="text-center" href="/Modif/footer" style="width:200px;  background-color: rgb(102, 168, 212); padding: 20px; color:white;" >Direction contact</a>
                
            </div>
            
            
            
            <div style="margin: 2rem; display:flex; flex-direction:column; align-items:center;">
                <h5>Modifier Titres</h5>
                <p>CRUD Titre</p>
                <a class="text-center" href="/Modif/titre" style="width:200px;  background-color: rgb(102, 168, 212); padding: 20px; color:white;" >Direction Titre</a>
                
            </div>
            
        </div>
        <div style='display:flex; justify-content:center'>
            <div style="margin: 8rem; display:flex; flex-direction:column; align-items:center; ">
                <h5>Ajouter Portfolio</h5>
                <p>CRUD Porfolio</p>
                <a class="text-center" href="{{route('headers.create')}} " style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;" >Creer</a>
                
            </div>
            
            
        </div>
    </section>
    
    
</x-app-layout>

