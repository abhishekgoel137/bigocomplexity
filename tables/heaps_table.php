<br><hr><br>
<h1 class="center" id="heaps"><a href="heaps" title="Heap Operations">Heap Operations</a></h1><br>

<table>
    <thead>
        <tr>
            <th><h3>Type</h3></th>
            <th colspan="7"><h3>Time Complexity</h3></th>
        </tr>
        <tr>
            <th></th>
            <th><h3>Heapify</h3></th>
            <th><h3>Find Max</h3></th>  
            <th><h3>Extract Max</h3></th>  
            <th><h3>Increase Key</h3></th>
            <th><h3>Insert</h3></th>
            <th><h3>Delete</h3></th>
            <th><h3>Merge</h3></th>  
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td class='heap'><a href="http://en.wikipedia.org/wiki/Linked_list"><h3>Linked List (sorted)</h3></a></td>
            <td class='heap'><code>-</code></td> <!-- heapify -->
            <td class='heap'><code class="green">O(1)</code></td> <!-- Find max -->
            <td class='heap'><code class="green">O(1)</code></td> <!-- Extract max -->
            <td class='heap'><code class="red">O(n)</code></td> <!-- Increase -->
            <td class='heap'><code class="red">O(n)</code></td> <!-- insert -->
            <td class='heap'><code class="green">O(1)</code></td> <!-- delete -->
            <td class='heap'><code class="red">O(m+n)</code></td> <!-- merge -->
        </tr>
        <tr>
            <td class='heap'><a href="http://en.wikipedia.org/wiki/Linked_list"><h3>Linked List (unsorted)</h3></a></td>
            <td class='heap'><code>-</code></td> <!-- heapify -->
            <td class='heap'><code class="red">O(n)</code></td> <!-- Find max -->
            <td class='heap'><code class="red">O(n)</code></td> <!-- Extract max -->
            <td class='heap'><code class="green">O(1)</code></td> <!-- Increase -->
            <td class='heap'><code class="green">O(1)</code></td> <!-- insert -->
            <td class='heap'><code class="green">O(1)</code></td> <!-- delete -->
            <td class='heap'><code class="green">O(1)</code></td> <!-- merge -->
        </tr>
        <tr>
            <td class='heap'><a href="http://en.wikipedia.org/wiki/Binary_heap"><h3>Binary Heap</h3></a></td>
            <td class='heap'><code class="yellow">O(n)</code></td>
            <td class='heap'><code class="green">O(1)</code></td>
            <td class='heap'><code class="yellow-green">O(log(n))</code></td>
            <td class='heap'><code class="yellow-green">O(log(n))</code></td>
            <td class='heap'><code class="yellow-green">O(log(n))</code></td>
            <td class='heap'><code class="yellow-green">O(log(n))</code></td>
            <td class='heap'><code class="red">O(m+n)</code></td>
        </tr>
        <tr>
            <td class='heap'><a href="http://en.wikipedia.org/wiki/Binomial_heap"><h3>Binomial Heap</h3></a></td>
            <td class='heap'><code>-</code></td>
            <td class='heap'><code title="With aux pointer" class="green">O(1)</code></td>
            <td class='heap'><code class="yellow-green">O(log(n))</code></td>
            <td class='heap'><code class="yellow-green">O(log(n))</code></td>
            <td class='heap'><code class="green">O(1)</code></td>
            <td class='heap'><code class="yellow-green">O(log(n))</code></td>
            <td class='heap'><code class="yellow-green">O(log(n))</code></td>
        </tr>
        <tr>
            <td class='heap'><a href="http://en.wikipedia.org/wiki/Fibonacci_heap"><h3>Fibonacci Heap</h3></a></td>
            <td class='heap'><code>-</code></td>
            <td class='heap'><code class="green">O(1)</code></td>
            <td class='heap'><code class="yellow-green">O(log(n))</code></td>
            <td class='heap'><code class="green">O(1)</code></td>
            <td class='heap'><code class="green">O(1)</code></td>
            <td class='heap'><code class="yellow-green">O(log(n))</code></td>
            <td class='heap'><code class="green">O(1)</code></td>
        </tr>
    </tbody>

</table>