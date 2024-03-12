@extends('plantilla')

@section('content')
<div class="p-8">
    <div class="font-bold text-black border-b border-zinc-400 px-5 py-3 text-2xl mx-5">
        Control Documentos - Administrador
    </div>
    <button id="addDocumentButton"  style="margin-left: 670px;" class="px-8 py-2 bg-sge text-white rounded-xl shadow-lg m-9 ml-auto" onclick="openModal()">Agregar Documento</button>
<div class="flex flex-col items-start justify-center">
    
    <div class="mb-4">
    </div>
    <div class="overflow-x-auto w-full flex justify-center">
    <table class="rounded-t-lg shadow-lg text-sm md:text-base">
            <thead class="bg-sge text-white">
                <tr>
                    <th class="px-10 py-4">Documento</th>
                    <th class="px-10 py-4">Descargas</th>
                    <th class="px-10 py-4">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-10 py-4">Documento 1</td>
                    <td class="border px-10 py-4">
                        <span class="min-h-[40px] flex items-center">
                           <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAZ9JREFUWEftmN9RhDAQxneBPsR3rEEg9HFQiWclYh/HiDUcMz5KIch6i8RB5I8Jwbm7IU8MCeSXb5flSxDOrOGZ8cBlAR2jaI9ED6oqEuLj3eGwV32Ox48qpAsjIXShRoEKId4BwNVZ5RKoKSDSgEkBwO8uRFUpo0A8uVNV6Ydtv+hCGQfiZH7zfVcXahUgDrUu1GpAulCrAulArQ40BuVl2eDcRoFOn3xOiK9D5QKJbgAgln3/BfTn0rUBzUm1KbQpNKfAXL+JHEq9LEuaf5Rl+YDITrL0siyQxa9ynLh1mHz/VkINmb3FQNLXsHEjxATr2gXEe4ZszVzeXIdhzLAMVAjx1PdHxgpj1+sMADVm7lSlA6eqSrYeDVAYxmRZLhLt+u7TmEIcsk5omjAWQny5S6LErutcAh2jyG+VZCB2kt/NCFDrBtlry9YF4pAFbb7s2pCxc/wBskbIfgGNJXUhxHpAE59xqbM7WRyyubqi2n8VQIs3ilOqKSu0dCs9BTO1eRy1sL16o5oiY+NLQnyeOoi4rOMYU7KovOfsFPoErtxTNF9vg5kAAAAASUVORK5CYII="/> </button>
                           <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAd5JREFUWEftmN1twjAQx+/i7EH6WCnsEEr3AAaAdgNgAwoDEPaAks7QSH0kg8S59kxMEYVEdpKKquQp4gD/7n8fPhvhyh68Mh74W0CPo/cJAY5NVUSg6Xrenpj+jr9/USFbGA1hC3URqDuKdwDg2XhZBaoIiIxhEEIgCI4dMVWqViBePHXcUGRyawtVOxAnc/D84dlCNQLEobaFagzIFqpRIBuoxoEuQW3m/tm1awX6KvkIkd7OtQtCbAFBX9t+B8igcd2AysS6KfTvFEqUxwQJoNrNT5/E1FYph4hg8LrwQ96fmMSRMkCE5X7C+54O1f5Fcqz6DUEkhRhEs3vlzOnAVxnIEZRQhltACDcv/kAtgNji9+4w5s8DdKiTgpuITO74XYmaIYP/GPTqAwIA6Yg7F1Ivk+hlQkQMoGKYwzLgZuF3uk/x8rg7H8e5ViD+s4dh3HeQPJ5/9Lirw6eBiubyeoAIe4i0Ws/akQoTALASOnwSxZSV49Dq8LlZ2ifAXq7OIXSVgLTnnLRqQYljXW1sAwcizp0cRudMgkArHmkZ5pDsOVkloLImZ2O/AZWpZqNQ5YNiEZQxUNWjdBFM0eHx4girKmpfssaXDQUwqvKKLiL+1nVMWWI2Yb86hT4BDKh2NBpnYXgAAAAASUVORK5CYII="/> </button>

                        </span>
                    </td>
                    <td class="border px-10 py-4">
                        <span class="min-h-[40px] flex items-center">
                            
                            <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAcBJREFUSEvt1MtKw0AYBeAzSdulNxRBQcWNiODCrS7E8TmkahsVmlYU9wW3pa1RRB3qwocQoQ2l9YZrH0BdiA/gxkrsSLxQNZem6YiCZpvM/3HOzITghx7yQy6Ewko23/cUkEguRm/qBRIGz2rlrgCMC4BLsoHxnRV664YLgefTRx1SMHgCjuE37KYeLgSOaoUcQOa+JLyWDUw4JRcChzPFtqBc1QGMfcI5X2WJ6bRd5b7hpe3jdsOoqEyl6yCEW3CODZagy0777At+RR+PAYwA/ICpNGziqnbY8kBCJXByyeJ0RujhUlLFTh56qXW0NpjvM5VGTFzZzbf23J3eJ5PJqjDYRBGqnnBgyDq0lrzeHTbfe67aHTVHfQMcyRa6JYmU7JM2jnpK/ILK5IxzDDpUyJg6tWDur5eK379xrXoxrfdWgyi7onGqNALWhU30KYBTAP0Og7dYnKp+UMeqvxt1hKOafgVgwDYNR4Yl6IrfpK5VRzXd/qAQpJhK15pF3RJbYYGod1gw6ghHNvOT73XKhFR2Y9PnIur9OMPzL/MfbrYB26odr5NPjcWpxfldsLKhJ32Gs122l6CWeX/vVD8DNwKwH24kwnEAAAAASUVORK5CYII="/></button> 
                                <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXpJREFUSEvtlj1Ow0AQhd8saaigiSM6joA4QGK8zgkgEgUIboCE6DE1BRwhCBokOEG8xrkA4gh0KI4ikYom2kFrCUggif8ihcLb7r75Zp531kNY0qIlcZEazK3WSn8wOGMhVqclS1p/VOv1S/I8naaY1OBIymsAJ/OCMvNVLQhOFwaOpDwC0E4TEMC+pdR90tmJivuuazPzU5Iozz4R7VR9P/zS/g/wm21vikrlOE9FSRo9GrU3wvB1asXj4qjZ3CLm9aSAcy8b0bvV6bxM7YJZwshxQhA1ioDB3LWCwC7BxoGZD8hvq5noIhZobf/5BMxdFiJuFWI+/7Z2EVZbSsVJ9lzXmwgOwCRV833P7EdScgkudKtLq8ftKy9X2U6F2slMECYAM5v/tRmFxtcNEcWj0cQEs4gnM9fvMRdYygcAu7mAP6JHS6m9TFb3pDwg4LYImIHDmlJ3mcDmcN9xtiFEQwNrWRIQwBBad6tB8DxLl3qgzwJOc3Zp4E8+h0kuW0jNVgAAAABJRU5ErkJggg=="/></button>
                        </span>
                    </td>
                <tr>
                    <td class="border px-10 py-4">Documento 1</td>
                    <td class="border px-10 py-4">
                        <span class="min-h-[40px] flex items-center">
                            <button> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAZ9JREFUWEftmN9RhDAQxneBPsR3rEEg9HFQiWclYh/HiDUcMz5KIch6i8RB5I8Jwbm7IU8MCeSXb5flSxDOrOGZ8cBlAR2jaI9ED6oqEuLj3eGwV32Ox48qpAsjIXShRoEKId4BwNVZ5RKoKSDSgEkBwO8uRFUpo0A8uVNV6Ydtv+hCGQfiZH7zfVcXahUgDrUu1GpAulCrAulArQ40BuVl2eDcRoFOn3xOiK9D5QKJbgAgln3/BfTn0rUBzUm1KbQpNKfAXL+JHEq9LEuaf5Rl+YDITrL0siyQxa9ynLh1mHz/VkINmb3FQNLXsHEjxATr2gXEe4ZszVzeXIdhzLAMVAjx1PdHxgpj1+sMADVm7lSlA6eqSrYeDVAYxmRZLhLt+u7TmEIcsk5omjAWQny5S6LErutcAh2jyG+VZCB2kt/NCFDrBtlry9YF4pAFbb7s2pCxc/wBskbIfgGNJXUhxHpAE59xqbM7WRyyubqi2n8VQIs3ilOqKSu0dCs9BTO1eRy1sL16o5oiY+NLQnyeOoi4rOMYU7KovOfsFPoErtxTNF9vg5kAAAAASUVORK5CYII="/> </button>
                            <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAd5JREFUWEftmN1twjAQx+/i7EH6WCnsEEr3AAaAdgNgAwoDEPaAks7QSH0kg8S59kxMEYVEdpKKquQp4gD/7n8fPhvhyh68Mh74W0CPo/cJAY5NVUSg6Xrenpj+jr9/USFbGA1hC3URqDuKdwDg2XhZBaoIiIxhEEIgCI4dMVWqViBePHXcUGRyawtVOxAnc/D84dlCNQLEobaFagzIFqpRIBuoxoEuQW3m/tm1awX6KvkIkd7OtQtCbAFBX9t+B8igcd2AysS6KfTvFEqUxwQJoNrNT5/E1FYph4hg8LrwQ96fmMSRMkCE5X7C+54O1f5Fcqz6DUEkhRhEs3vlzOnAVxnIEZRQhltACDcv/kAtgNji9+4w5s8DdKiTgpuITO74XYmaIYP/GPTqAwIA6Yg7F1Ivk+hlQkQMoGKYwzLgZuF3uk/x8rg7H8e5ViD+s4dh3HeQPJ5/9Lirw6eBiubyeoAIe4i0Ws/akQoTALASOnwSxZSV49Dq8LlZ2ifAXq7OIXSVgLTnnLRqQYljXW1sAwcizp0cRudMgkArHmkZ5pDsOVkloLImZ2O/AZWpZqNQ5YNiEZQxUNWjdBFM0eHx4girKmpfssaXDQUwqvKKLiL+1nVMWWI2Yb86hT4BDKh2NBpnYXgAAAAASUVORK5CYII="/></button>
                         </span>
                     </td>
                     <td class="border px-10 py-4">
                         <span class="min-h-[40px] flex items-center">
                             <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAcBJREFUSEvt1MtKw0AYBeAzSdulNxRBQcWNiODCrS7E8TmkahsVmlYU9wW3pa1RRB3qwocQoQ2l9YZrH0BdiA/gxkrsSLxQNZem6YiCZpvM/3HOzITghx7yQy6Ewko23/cUkEguRm/qBRIGz2rlrgCMC4BLsoHxnRV664YLgefTRx1SMHgCjuE37KYeLgSOaoUcQOa+JLyWDUw4JRcChzPFtqBc1QGMfcI5X2WJ6bRd5b7hpe3jdsOoqEyl6yCEW3CODZagy0777At+RR+PAYwA/ICpNGziqnbY8kBCJXByyeJ0RujhUlLFTh56qXW0NpjvM5VGTFzZzbf23J3eJ5PJqjDYRBGqnnBgyDq0lrzeHTbfe67aHTVHfQMcyRa6JYmU7JM2jnpK/ILK5IxzDDpUyJg6tWDur5eK379xrXoxrfdWgyi7onGqNALWhU30KYBTAP0Og7dYnKp+UMeqvxt1hKOafgVgwDYNR4Yl6IrfpK5VRzXd/qAQpJhK15pF3RJbYYGod1gw6ghHNvOT73XKhFR2Y9PnIur9OMPzL/MfbrYB26odr5NPjcWpxfldsLKhJ32Gs122l6CWeX/vVD8DNwKwH24kwnEAAAAASUVORK5CYII="/></button> 
                                 <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXpJREFUSEvtlj1Ow0AQhd8saaigiSM6joA4QGK8zgkgEgUIboCE6DE1BRwhCBokOEG8xrkA4gh0KI4ikYom2kFrCUggif8ihcLb7r75Zp531kNY0qIlcZEazK3WSn8wOGMhVqclS1p/VOv1S/I8naaY1OBIymsAJ/OCMvNVLQhOFwaOpDwC0E4TEMC+pdR90tmJivuuazPzU5Iozz4R7VR9P/zS/g/wm21vikrlOE9FSRo9GrU3wvB1asXj4qjZ3CLm9aSAcy8b0bvV6bxM7YJZwshxQhA1ioDB3LWCwC7BxoGZD8hvq5noIhZobf/5BMxdFiJuFWI+/7Z2EVZbSsVJ9lzXmwgOwCRV833P7EdScgkudKtLq8ftKy9X2U6F2slMECYAM5v/tRmFxtcNEcWj0cQEs4gnM9fvMRdYygcAu7mAP6JHS6m9TFb3pDwg4LYImIHDmlJ3mcDmcN9xtiFEQwNrWRIQwBBad6tB8DxLl3qgzwJOc3Zp4E8+h0kuW0jNVgAAAABJRU5ErkJggg=="/></button>
                         </span>
                    </td>
                    
                </tr>
                <tr>
                    <td class="border px-10 py-4">Documento 1</td>
                    <td class="border px-10 py-4">
                        <span class="min-h-[40px] flex items-center">
                            <button> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAZ9JREFUWEftmN9RhDAQxneBPsR3rEEg9HFQiWclYh/HiDUcMz5KIch6i8RB5I8Jwbm7IU8MCeSXb5flSxDOrOGZ8cBlAR2jaI9ED6oqEuLj3eGwV32Ox48qpAsjIXShRoEKId4BwNVZ5RKoKSDSgEkBwO8uRFUpo0A8uVNV6Ydtv+hCGQfiZH7zfVcXahUgDrUu1GpAulCrAulArQ40BuVl2eDcRoFOn3xOiK9D5QKJbgAgln3/BfTn0rUBzUm1KbQpNKfAXL+JHEq9LEuaf5Rl+YDITrL0siyQxa9ynLh1mHz/VkINmb3FQNLXsHEjxATr2gXEe4ZszVzeXIdhzLAMVAjx1PdHxgpj1+sMADVm7lSlA6eqSrYeDVAYxmRZLhLt+u7TmEIcsk5omjAWQny5S6LErutcAh2jyG+VZCB2kt/NCFDrBtlry9YF4pAFbb7s2pCxc/wBskbIfgGNJXUhxHpAE59xqbM7WRyyubqi2n8VQIs3ilOqKSu0dCs9BTO1eRy1sL16o5oiY+NLQnyeOoi4rOMYU7KovOfsFPoErtxTNF9vg5kAAAAASUVORK5CYII="/> </button>
                            <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAd5JREFUWEftmN1twjAQx+/i7EH6WCnsEEr3AAaAdgNgAwoDEPaAks7QSH0kg8S59kxMEYVEdpKKquQp4gD/7n8fPhvhyh68Mh74W0CPo/cJAY5NVUSg6Xrenpj+jr9/USFbGA1hC3URqDuKdwDg2XhZBaoIiIxhEEIgCI4dMVWqViBePHXcUGRyawtVOxAnc/D84dlCNQLEobaFagzIFqpRIBuoxoEuQW3m/tm1awX6KvkIkd7OtQtCbAFBX9t+B8igcd2AysS6KfTvFEqUxwQJoNrNT5/E1FYph4hg8LrwQ96fmMSRMkCE5X7C+54O1f5Fcqz6DUEkhRhEs3vlzOnAVxnIEZRQhltACDcv/kAtgNji9+4w5s8DdKiTgpuITO74XYmaIYP/GPTqAwIA6Yg7F1Ivk+hlQkQMoGKYwzLgZuF3uk/x8rg7H8e5ViD+s4dh3HeQPJ5/9Lirw6eBiubyeoAIe4i0Ws/akQoTALASOnwSxZSV49Dq8LlZ2ifAXq7OIXSVgLTnnLRqQYljXW1sAwcizp0cRudMgkArHmkZ5pDsOVkloLImZ2O/AZWpZqNQ5YNiEZQxUNWjdBFM0eHx4girKmpfssaXDQUwqvKKLiL+1nVMWWI2Yb86hT4BDKh2NBpnYXgAAAAASUVORK5CYII="/> </button>
                         </span>
                     </td>
                     <td class="border px-10 py-4">
                         <span class="min-h-[40px] flex items-center">
                             <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAcBJREFUSEvt1MtKw0AYBeAzSdulNxRBQcWNiODCrS7E8TmkahsVmlYU9wW3pa1RRB3qwocQoQ2l9YZrH0BdiA/gxkrsSLxQNZem6YiCZpvM/3HOzITghx7yQy6Ewko23/cUkEguRm/qBRIGz2rlrgCMC4BLsoHxnRV664YLgefTRx1SMHgCjuE37KYeLgSOaoUcQOa+JLyWDUw4JRcChzPFtqBc1QGMfcI5X2WJ6bRd5b7hpe3jdsOoqEyl6yCEW3CODZagy0777At+RR+PAYwA/ICpNGziqnbY8kBCJXByyeJ0RujhUlLFTh56qXW0NpjvM5VGTFzZzbf23J3eJ5PJqjDYRBGqnnBgyDq0lrzeHTbfe67aHTVHfQMcyRa6JYmU7JM2jnpK/ILK5IxzDDpUyJg6tWDur5eK379xrXoxrfdWgyi7onGqNALWhU30KYBTAP0Og7dYnKp+UMeqvxt1hKOafgVgwDYNR4Yl6IrfpK5VRzXd/qAQpJhK15pF3RJbYYGod1gw6ghHNvOT73XKhFR2Y9PnIur9OMPzL/MfbrYB26odr5NPjcWpxfldsLKhJ32Gs122l6CWeX/vVD8DNwKwH24kwnEAAAAASUVORK5CYII="/></button> 
                                 <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXpJREFUSEvtlj1Ow0AQhd8saaigiSM6joA4QGK8zgkgEgUIboCE6DE1BRwhCBokOEG8xrkA4gh0KI4ikYom2kFrCUggif8ihcLb7r75Zp531kNY0qIlcZEazK3WSn8wOGMhVqclS1p/VOv1S/I8naaY1OBIymsAJ/OCMvNVLQhOFwaOpDwC0E4TEMC+pdR90tmJivuuazPzU5Iozz4R7VR9P/zS/g/wm21vikrlOE9FSRo9GrU3wvB1asXj4qjZ3CLm9aSAcy8b0bvV6bxM7YJZwshxQhA1ioDB3LWCwC7BxoGZD8hvq5noIhZobf/5BMxdFiJuFWI+/7Z2EVZbSsVJ9lzXmwgOwCRV833P7EdScgkudKtLq8ftKy9X2U6F2slMECYAM5v/tRmFxtcNEcWj0cQEs4gnM9fvMRdYygcAu7mAP6JHS6m9TFb3pDwg4LYImIHDmlJ3mcDmcN9xtiFEQwNrWRIQwBBad6tB8DxLl3qgzwJOc3Zp4E8+h0kuW0jNVgAAAABJRU5ErkJggg=="/></button>
                         </span>
                    </td>
                </tr>
                    <tr>
                        <td class="border px-10 py-4">Documento 1</td>
                        <td class="border px-10 py-4">
                            <span class="min-h-[40px] flex items-center">
                                <button> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAZ9JREFUWEftmN9RhDAQxneBPsR3rEEg9HFQiWclYh/HiDUcMz5KIch6i8RB5I8Jwbm7IU8MCeSXb5flSxDOrOGZ8cBlAR2jaI9ED6oqEuLj3eGwV32Ox48qpAsjIXShRoEKId4BwNVZ5RKoKSDSgEkBwO8uRFUpo0A8uVNV6Ydtv+hCGQfiZH7zfVcXahUgDrUu1GpAulCrAulArQ40BuVl2eDcRoFOn3xOiK9D5QKJbgAgln3/BfTn0rUBzUm1KbQpNKfAXL+JHEq9LEuaf5Rl+YDITrL0siyQxa9ynLh1mHz/VkINmb3FQNLXsHEjxATr2gXEe4ZszVzeXIdhzLAMVAjx1PdHxgpj1+sMADVm7lSlA6eqSrYeDVAYxmRZLhLt+u7TmEIcsk5omjAWQny5S6LErutcAh2jyG+VZCB2kt/NCFDrBtlry9YF4pAFbb7s2pCxc/wBskbIfgGNJXUhxHpAE59xqbM7WRyyubqi2n8VQIs3ilOqKSu0dCs9BTO1eRy1sL16o5oiY+NLQnyeOoi4rOMYU7KovOfsFPoErtxTNF9vg5kAAAAASUVORK5CYII="/> </button>
                                <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAd5JREFUWEftmN1twjAQx+/i7EH6WCnsEEr3AAaAdgNgAwoDEPaAks7QSH0kg8S59kxMEYVEdpKKquQp4gD/7n8fPhvhyh68Mh74W0CPo/cJAY5NVUSg6Xrenpj+jr9/USFbGA1hC3URqDuKdwDg2XhZBaoIiIxhEEIgCI4dMVWqViBePHXcUGRyawtVOxAnc/D84dlCNQLEobaFagzIFqpRIBuoxoEuQW3m/tm1awX6KvkIkd7OtQtCbAFBX9t+B8igcd2AysS6KfTvFEqUxwQJoNrNT5/E1FYph4hg8LrwQ96fmMSRMkCE5X7C+54O1f5Fcqz6DUEkhRhEs3vlzOnAVxnIEZRQhltACDcv/kAtgNji9+4w5s8DdKiTgpuITO74XYmaIYP/GPTqAwIA6Yg7F1Ivk+hlQkQMoGKYwzLgZuF3uk/x8rg7H8e5ViD+s4dh3HeQPJ5/9Lirw6eBiubyeoAIe4i0Ws/akQoTALASOnwSxZSV49Dq8LlZ2ifAXq7OIXSVgLTnnLRqQYljXW1sAwcizp0cRudMgkArHmkZ5pDsOVkloLImZ2O/AZWpZqNQ5YNiEZQxUNWjdBFM0eHx4girKmpfssaXDQUwqvKKLiL+1nVMWWI2Yb86hT4BDKh2NBpnYXgAAAAASUVORK5CYII="/> </button>
                             </span>
                         </td>
                         <td class="border px-10 py-4">
                             <span class="min-h-[40px] flex items-center">
                                

                                 <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAcBJREFUSEvt1MtKw0AYBeAzSdulNxRBQcWNiODCrS7E8TmkahsVmlYU9wW3pa1RRB3qwocQoQ2l9YZrH0BdiA/gxkrsSLxQNZem6YiCZpvM/3HOzITghx7yQy6Ewko23/cUkEguRm/qBRIGz2rlrgCMC4BLsoHxnRV664YLgefTRx1SMHgCjuE37KYeLgSOaoUcQOa+JLyWDUw4JRcChzPFtqBc1QGMfcI5X2WJ6bRd5b7hpe3jdsOoqEyl6yCEW3CODZagy0777At+RR+PAYwA/ICpNGziqnbY8kBCJXByyeJ0RujhUlLFTh56qXW0NpjvM5VGTFzZzbf23J3eJ5PJqjDYRBGqnnBgyDq0lrzeHTbfe67aHTVHfQMcyRa6JYmU7JM2jnpK/ILK5IxzDDpUyJg6tWDur5eK379xrXoxrfdWgyi7onGqNALWhU30KYBTAP0Og7dYnKp+UMeqvxt1hKOafgVgwDYNR4Yl6IrfpK5VRzXd/qAQpJhK15pF3RJbYYGod1gw6ghHNvOT73XKhFR2Y9PnIur9OMPzL/MfbrYB26odr5NPjcWpxfldsLKhJ32Gs122l6CWeX/vVD8DNwKwH24kwnEAAAAASUVORK5CYII="/></button> 
                                     <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXpJREFUSEvtlj1Ow0AQhd8saaigiSM6joA4QGK8zgkgEgUIboCE6DE1BRwhCBokOEG8xrkA4gh0KI4ikYom2kFrCUggif8ihcLb7r75Zp531kNY0qIlcZEazK3WSn8wOGMhVqclS1p/VOv1S/I8naaY1OBIymsAJ/OCMvNVLQhOFwaOpDwC0E4TEMC+pdR90tmJivuuazPzU5Iozz4R7VR9P/zS/g/wm21vikrlOE9FSRo9GrU3wvB1asXj4qjZ3CLm9aSAcy8b0bvV6bxM7YJZwshxQhA1ioDB3LWCwC7BxoGZD8hvq5noIhZobf/5BMxdFiJuFWI+/7Z2EVZbSsVJ9lzXmwgOwCRV833P7EdScgkudKtLq8ftKy9X2U6F2slMECYAM5v/tRmFxtcNEcWj0cQEs4gnM9fvMRdYygcAu7mAP6JHS6m9TFb3pDwg4LYImIHDmlJ3mcDmcN9xtiFEQwNrWRIQwBBad6tB8DxLl3qgzwJOc3Zp4E8+h0kuW0jNVgAAAABJRU5ErkJggg=="/></button>
                             </span>
                    </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal para agregar nuevo documento -->
<div id="modalAgregarDocumento" class="hidden fixed inset-0 flex items-center justify-center z-10">
    <div class="absolute inset-0 bg-black opacity-75" onclick="closeModal()"></div>
    <div class="bg-white p-8 rounded-lg z-20">
        <h2 class="text-lg font-bold mb-4" >Agregar Nuevo Documento</h2>
        <form>
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre del Documento</label>
                <input type="text" id="nombre" name="nombre" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
            </div>
            <div class="mb-4">
                <label for="archivo" class="block text-sm font-medium text-gray-700">Archivo</label>
                <input type="file" id="archivo" name="archivo" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-sge text-white rounded-lg">Guardar</button>
                <button type="button" class="px-4 py-2 bg-white text-gray-700 rounded-lg ml-4" onclick="closeModal()">Cancelar</button>
            </div>
        </form>
    </div>
</div>

<script>
    const openModal = () => {
        document.getElementById('modalAgregarDocumento').classList.remove('hidden');
    };

    const closeModal = () => {
        document.getElementById('modalAgregarDocumento').classList.add('hidden');
    };
</script>
@endsection