@extends('layout')

@section('content')
    <div id="app" class="flex items-center h-auto w-full sm:w-8/12 mt-24 mb-12">
        <div class="bg-gray-100 p-4 sm:pr-12 rounded-lg w-full sm:w-8/12 shadow-xl">
            {{--mobile avatar--}}
            <div class="flex justify-center">
                <div class="w-1/2">
                    <img src="https://api.adorable.io/avatars/285/{{auth('student')->user()->id}}"
                         class="block lg:hidden rounded-full shadow-2xl -mt-20 mb-4 h-auto w-full bg-cover bg-center border border-gray-400">
                </div>
            </div>
            {{--Students Name--}}
            <div class="w-full">
                <h1 class="text-2xl font-extrabold capitalize tracking-wide leading-8 text-purple-600 pb-1 border-b border-gray-600">
                    {{auth('student')->user()->name}}
                </h1>
            </div>
            {{--Request patient--}}

            <div class="flex flex-col w-full justify-start" v-show="showRequest">
                <label class="text-lg text-gray-700 font-bold mt-4 mb-2">
                    Procedure Type
                </label>
                <div class="flex">
                    <div class="relative w-full">
                        <select v-model="selected"
                                class="appearance-none w-full shadow-lg bg-white text-gray-600 text-sm border border-gray-400 rounded-md py-2 px-4 focus:outline-none focus:border-purple-400 ">
                            <option disabled hidden :value="null">Procedures</option>
                            <option v-for="procedure in procedures">
                                @{{procedure}}
                            </option>
                        </select>
                        <div class="pointer-events-none absolute right-0 top-0 mt-3 mr-2">
                            <svg class="fill-current bg-white text-center text-purple-400 h-4 w-4"
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20">
                                <path
                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                    <button @click="sendRequest()"
                            type="submit"
                            class="bg-white transform focus:scale-105 ml-2 focus:border-purple-500 focus:outline-none border border-gray-400 text-xs text-purple-400 leading-5 tracking-wide py-2 px-4 shadow-lg rounded-md">
                        Send
                    </button>
                </div>
            </div>
            <div class="flex w-full justify-end mt-4">
                <a @click="requestPatient()"
                   class="text-xs font-semibold leading-5 text-purple-500 hover:text-purple-500 cursor-pointer">
                    Need A Patient?
                </a>
            </div>

            {{--Patients Progress--}}
            <div>
                <div class="flex relative flex-col mt-2 mb-2">
                    <h1 class="text-lg text-gray-700 font-bold">
                        Procedures Record
                    </h1>
                    <div class="h-32 overflow-y-auto">
                        <div v-for="patient in patients" class="flex w-full bg-gray-700 rounded-lg shadow-md p-2 mt-1">
                            <div class="flex justify-start w-full">
                                <div class="flex">
                                    <p class="text-white text-xs self-center font-semibold leading-5">
                                        @{{ patient.name }} - @{{ patient.number }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex justify-end w-full">
                                <div>
                          <span
                              class="capitalize px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-300 text-red-700">
                            @{{patient.status}}
                        </span>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="h-5 sm:h-10 gradient absolute w-full bottom-0">
                    </div>
                </div>
                <div class="flex w-full justify-end self-end mt-6">
                    <a @click=""
                       class="text-xs font-semibold leading-5 text-purple-500 hover:text-purple-500 cursor-pointer">
                        Change Status?
                    </a>
                </div>
            </div>
        </div>
        {{--desktop avatar--}}
        <div>
            <img src="https://api.adorable.io/avatars/285/{{auth('student')->user()->id}}"
                 class="rounded-none w-0 sm:w-full -ml-10 lg:rounded-lg shadow-2xl hidden lg:block">
        </div>

    </div>
@endsection

@push('script')
    <script>
        let app = new Vue({
            el: '#app',
            data: {
                stage: "{{auth('student')->user()->stage}}",
                status: "{{auth('student')->user()->status}}",
                procedures: [],
                selected: null,
                showRequest: false,
                patients: [],
            },
            methods: {
                showProcedures() {
                    if (this.stage == 'Fifth Stage') {
                        axios.get('/students/api/procedures/fifth').then(response => {
                            this.procedures = response.data.procedures;
                        })
                    }
                    if (this.stage == 'Fourth Stage') {
                        axios.get('/students/api/procedures/fourth').then(response => {
                            console.log(response)
                            this.procedures = response.data.procedures;
                        })
                    }
                },
                requestPatient() {
                    this.showRequest = !this.showRequest;
                },
                sendRequest() {
                    // todo
                    // make post request through blade? i think that's what he meant i keep losing it and it's annoying i'm leaving programming
                    // it's been two fucking year i dunno what's happening to me or i do i'm just pmsing my stomach is bloated and just fuck life
                    //it's just that time of the fucking month
                    // and i feel stupid jesus this is annoying
                    // and i'm fat and my back hurts i guess and i really wanna cry for no absolute fucking reason i just do jesus i'm such a baby

                    // another sad moment
                    // i feel like i'm back where i started or maybe worse because i found out what i want two years ago and i kinda felt like i can do them but no jesus everything is so weird
                    // like i want people who love me value me same mined work together live experience life together
                    // i just want this kind of life i want people who understand me do things with watch things with play with
                    //i just wanted that all along
                    //i'm not an awful person i thought i deserve such a thing
                    //i feel week i should feel week or maybe i used to feel week and alone and needy, i thought i needed certain people to stay in my life so it would be better
                    //i thought that i can''t do things on my own i think i still believe that but doesn't matter
                    //what i'm thinking is all wrong i should start focusing on doing things and be sure that what i want will come along
                    //so uhm i just wanted to live like HIMYM live like them be lie them
                    //uhm i can do that right? i feel like i'm gonna age way too soon and not experience any of those things
                    //will i let this happen, it's not really up to me though
                    //it's up to the ideas i need to work on it's up to the decisions i should be making
                    //it's about the things i'm spending my time doing
                    //i am behind on life like a lot behind but i think it's okay because once i am comfortable
                    //now i feel like i wanna cry shit why do i feel like this why do i keep asking those stupid questions

                    //wait i have all those money like almost a 1000 dollars why not spend them on a project i have how about that
                    //spend them in a safe place where i can use my skills and do something with it, involve people, create a solution isn't this what i want?
                    //yes it is jesus i'm so lucky i think, okay so look i'm gonna keep doing three things first is to keep collecting money, the second is to keep working on
                    //things i.e programming and english number three is so find out what and how i'm gonna start a project where i can get what i want and also be satisfied for helping people
                    //jesus i think this was good! you have every thing you need bitch!
                    //so a startup idea the goal i want is to collect different people with different skills and open mindset
                    // and make sure i can trust them at least trust their work
                    //come up with what i want to active like the service i want to provide
                    //aside from all this my main goal is to provide a service so stick with that look for what you can provide and offer people
                    //something with real value something for the audouins i desire something technological
                    //i need to pay effort and money and time, because all these things need to be paid for and not not just with materials
                    //so you agree to this? dedicating your life from now on to getting to this goal?
                    //my answer is yes this makes me excited meaning i want this and if i want it meaning i can do it,
                    //first step gather more people and stay connected, this one is simply to help me track my goal better and get inspirations
                    //brainstorm i should do that someday
                    //ah wow too much to process but i like it i should keep this spirit inside of me.
                    //i need more people to acknowledge me, that's important and you know it
                    // so you're okay now right? you know what you want and what you need is still blurry but time and actions will remove th blurriness okay?'
                    // okaaaaaaaayyyy i'm so ready for this, i'm gonna make my past self so damn jealous of me, who knew all i needed was a talk with my self
                    //i need to make sure that this is something i'm gonna do a lot so i would stay sane and in a great mind shape
                    //right now you have recoded, you have the teeth project, make sure to make it global
                    //cheaper and more efficient whatever my project is i should make sure it is that cheap for people and efficient to provide a great service.
                    //wow damn girl you had all this in you, you're so excited to talk to also the keyboard is nice when i type on it also the setup is cool also
                    //writing in the editor is a whole new experience that i'm liking........................... ahhhhhhhhwooohhh i went to bathroom and came back and gonna go downstairs but before that i just wanna say OOOOOOOOOOOOOOOOOOOOOFFFFFFFFFFF neahhahahhahahhhahhhag
                    if (this.status == 'unavailable') {
                        return alert("finish what's in your plate first bitch")
                    } else {
                        axios.post('/students/requests', {
                            procedure: this.selected,
                        })
                            .then(function (response) {
                                console.log(alert('success'));

                            })
                            .catch(function (error) {
                                console.log(error);
                            });
                    }
                },
                getMyPatients() {
                    axios.get('/students/api/patients').then(response => {
                        this.patients = response.data.patients
                    })
                }
            },
            mounted() {
                this.showProcedures();
                this.getMyPatients();

            }
        })
    </script>
@endpush
