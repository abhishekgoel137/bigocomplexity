<hr><br>
<h1 class="center" id="data-structures"><a href="data-structure" title="Data Structure Operations">Data Structure Operations</a></h1><br>

<table>

    <thead>
    <tr>
        <th><h3>Data Structure</h3></th>
        <th colspan="4"><h3>Average Time Complexity</h3></th>  
        <th colspan="4"><h3>Worst Time Complexity</h3></th>                
        <th><h3>Worst Space Complexity</h3></th>                
    </tr>
    <tr>
        <th></th>
        <th><h3>Access</h3></th>
        <th><h3>Search</h3></th>
        <th><h3>Insertion</h3></th>  
        <th><h3>Deletion</h3></th>  
        <th><h3>Access</h3></th>
        <th><h3>Search</h3></th>
        <th><h3>Insertion</h3></th>  
        <th><h3>Deletion</h3></th>  
        <th></th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td class="ds"><a href="http://en.wikipedia.org/wiki/Array_data_structure"><h3>Array</h3></a></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
    </tr>
    <tr>
        <td class="ds"><a href="http://en.wikipedia.org/wiki/Stack_(abstract_data_type)"><h3>Stack</h3></a></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
    </tr>
    <tr>
        <td class="ds"><a href="http://en.wikipedia.org/wiki/Singly_linked_list#Singly_linked_lists"><h3>Singly-Linked List</h3></a></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
    </tr> 
    <tr>
        <td class="ds"><a href="http://en.wikipedia.org/wiki/Doubly_linked_list"><h3>Doubly-Linked List</h3></a></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
    </tr> 
    <tr>
        <td class="ds"><a href="http://en.wikipedia.org/wiki/Skip_list"><h3>Skip List</h3></a></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="orange">O(n log(n))</code></td>
    </tr> 
    <tr>
        <td class="ds"><a href="http://en.wikipedia.org/wiki/Hash_table"><h3>Hash Table</h3></a></td>
        <td class="ds"><code>-</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code class="green">O(1)</code></td>
        <td class="ds"><code>-</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
    </tr>
    <tr>
        <td class="ds"><a href="http://en.wikipedia.org/wiki/Binary_search_tree"><h3>Binary Search Tree</h3></a></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
    </tr>
    <tr>
        <td class="ds"><a href="https://en.wikipedia.org/wiki/Cartesian_tree"><h3>Cartesian Tree</h3></a></td>
        <td class="ds"><code>-</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code>-</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
    </tr>
    <tr>
        <td class="ds"><a href="http://en.wikipedia.org/wiki/B_tree"><h3>B-Tree</h3></a></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
    </tr>
    <tr>
        <td class="ds"><a href="http://en.wikipedia.org/wiki/Red-black_tree"><h3>Red-Black Tree</h3></a></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
    </tr>
    <tr>
        <td class="ds"><a href="https://en.wikipedia.org/wiki/Splay_tree"><h3>Splay Tree</h3></a></td>
        <td class="ds"><code>-</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code>-</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
    </tr>
    <tr>
        <td class="ds"><a href="http://en.wikipedia.org/wiki/AVL_tree"><h3>AVL Tree</h3></a></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow-green">O(log(n))</code></td>
        <td class="ds"><code class="yellow">O(n)</code></td>
    </tr>
  </tbody>
</table>